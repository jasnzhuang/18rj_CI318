<?php
class girls extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('girls_model');
        $this->load->helper('url_helper');
    }

    public function index()
    {
    	$data['girls'] = $this->girls_model->get_girls();
    	$this->load->view('girls/index', $data);
    }
}
    ?>