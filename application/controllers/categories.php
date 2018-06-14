<?php
class categories extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {

	    $data['categories'] = $this->categories_model->get_categories($id=false);
	    $data['title'] = '类别列表';

	    $this->load->view('templates/header', $data);
	    $this->load->view('categories/index', $data);
	    $this->load->view('templates/footer');
    }

	public function create()
	{
	    $data['title'] = '添加类别';

	    $this->form_validation->set_rules('catename', 'catename', 'required');

	    if ($this->form_validation->run() === FALSE)
	    {
	        $this->load->view('templates/header', $data);
	        $this->load->view('categories/create', $data);
	        $this->load->view('templates/footer');
	    }
	    else
	    {
	        $this->categories_model->set_categories();
	        $this->load->view('news/success');
	    }
	}
	public function Edit($id)
	{

		$data['title'] = '编辑类别';

	    $this->form_validation->set_rules('catename', 'catename', 'required');

	    $data['categories_item'] = $this->categories_model->get_categories($id);

	    if (empty($data['categories_item']))
	    {
	        show_404();
	    }

	    $this->load->view('templates/header', $data);
	    $this->load->view('categories/edit', $data);
	    $this->load->view('templates/footer');
	}

	public function Update()
	{
		$this->categories_model->update_categories();
	    $this->load->view('news/success');
	}

	public function Delete($categories_id)
	{
		$this->categories_model->delete_categories($categories_id);
		$this->load->view('news/success');
	}
}