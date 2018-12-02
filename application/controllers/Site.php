<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends CI_Controller {


	    public function __construct()
    {
        parent::__construct();
        $this->load->library(array('session', 'form_validation'));
        $this->load->model('user_model');
        $this->load->helper(array('form', 'url'));
        $this->load->model('create_page_model');
        $this->load->model('menu_setup_model');
       
    }



	public function index()

	{
		$data['menu_setup']=$this->menu_setup_model->get_page_from_menu();

		$data['create_page']=$this->create_page_model->get_page_content();
		$data['submenu']=$this->menu_setup_model->get_submenu_page();
		$this->load->view('site_templates/header');
		$this->load->view('site_templates/navigation',$data);
		$this->load->view('test',$data);
		$this->load->view('site_templates/footer');
	}

	public function page()

	{
		$data['menu_setup']=$this->menu_setup_model->get_page_from_menu();
		$data['submenu']=$this->menu_setup_model->get_submenu_page();

		$data['create_page']=$this->create_page_model->get_page_content();
		$this->load->view('site_templates/header');
		$this->load->view('site_templates/navigation',$data);
		$this->load->view('site/page',$data);
		$this->load->view('site_templates/footer');
	}
}
