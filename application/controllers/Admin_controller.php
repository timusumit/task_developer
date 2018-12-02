<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_controller extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
   public function __construct()
    {
        parent::__construct();
        $this->load->helper('url_helper');
         $this->load->library('session');
         $this->load->model('user_model');
    //     $this->load->model('inquiry_model');
      //   $this->load->model('appointments_model');
       
        if (!$this->session->userdata('is_logged_in')) {
            redirect(site_url('user/login'));
        } 
    }
	 public function display($view,$data){
	 		$this->load->view('admin_templates/header',$data);
	 		$this->load->view('admin_templates/sidebar');
	 		$this->load->view('admin_templates/navigation'); 		
	 		$this->load->view($view,$data);
	 		$this->load->view('admin_templates/footer');

	 }

	public function index()
	{
		$data['titlename']=$this->user_model->get_logged_user();
	//	$data['add_appointment']=$this->appointments_model->get_appointment();
//		$data['inquiry']=$this->inquiry_model->get_inquiry();
		$data['test_title']="Comming Soong";
		$this->display('test',$data);

	}
}
