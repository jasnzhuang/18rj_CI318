<?php
class News extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
	    $data['news'] = $this->news_model->get_news();
	    $data['categories'] = $this->categories_model->get_categories($id = false);
	    $data['title'] = '新闻列表';

	    $this->load->view('templates/header', $data);
	    $this->load->view('news/index', $data);
	    $this->load->view('templates/footer');
    }

    public function category($cid)
    {
    	$data['news'] = $this->news_model->get_category_news($cid);
    	$data['categories'] = $this->categories_model->get_categories($id=false);
	    $data['title'] = '分类新闻列表';
	    $data['cid'] = $cid;

	    $this->load->view('templates/header', $data);
	    $this->load->view('news/index', $data);
	    $this->load->view('templates/footer');
    }

    public function view($id = NULL)
	{
	    $data['news_item'] = $this->news_model->get_news_id($id);
	    $data['comments'] = $this->comment_model->get_comments(1);

	    if (empty($data['news_item']))
	    {
	        show_404();
	    }

	    $data['title'] = $data['news_item']['title'];

	    $this->load->view('templates/header', $data);
	    $this->load->view('news/view', $data);
	    $this->load->view('templates/footer');
	}
	public function create($cid = false)
	{
	    $data['categories'] = $this->categories_model->get_categories($id=false);

	    $data['title'] = '添加新闻';
	    $data['cid'] = $cid;

	    $this->form_validation->set_rules('title', 'Title', 'required');
	    $this->form_validation->set_rules('content', 'Content', 'required');

	    if ($this->form_validation->run() === FALSE)
	    {
	        $this->load->view('templates/header', $data);
	        $this->load->view('news/create', $data);
	        $this->load->view('templates/footer');
	    }
	    else
	    {
	        $this->news_model->set_news();
	        $this->load->view('news/success');
	    }
	}
	public function Edit($id)
	{
		$data['title'] = '编辑新闻';

	    $this->form_validation->set_rules('title', 'Title', 'required');
	    $this->form_validation->set_rules('content', 'Content', 'required');

	    $data['news_item'] = $this->news_model->get_news_id($id);

	    if (empty($data['news_item']))
	    {
	        show_404();
	    }

	    $this->load->view('templates/header', $data);
	    $this->load->view('news/edit', $data);
	    $this->load->view('templates/footer');
	}

	public function Update()
	{
		$this->news_model->update_news();
	    $this->load->view('news/success');
	}

	public function Delete($news_id)
	{
		$this->news_model->delete_news($news_id);
		$this->load->view('news/success');
	}
}