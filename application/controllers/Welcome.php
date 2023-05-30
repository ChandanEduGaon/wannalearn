<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct(){
		parent::__construct();
	}
	public function index()
	{
		$page_date['page_name'] = 'home';
		$page_date['page_title'] = 'Home';
		$page_date['js_page'] = 'sign_up_js';
		$this->load->view('index', $page_date);
	}
	public function contact()
	{
		$page_date['page_name'] = 'contact';
		$page_date['page_title'] = 'Contact';
		$this->load->view('index', $page_date);
	}
	public function signup()
	{
		
		$u_data['u_name']=$this->input->post('name');
		$u_data['u_email']=$this->input->post('email');
		$u_data['u_pass']=$this->input->post('pass');

		$is_signup = $this->DatabaseQuery->signup($u_data);

		if($is_signup){
		$this->session->set_userdata('user', $u_data['u_name']);
		}
		
	}
	public function signin()
	{
		$u_data['email']=$this->input->post('email');
		$u_data['pass']=$this->input->post('pass');

		$is_signin = $this->DatabaseQuery->signin($u_data);

		if($is_signin){
			$this->session->set_userdata('user', $is_signin[0]->u_name);
			echo json_encode($is_signin);
		}
		
	}
	public function logout()
	{
		$this->session->unset_userdata('user');
		redirect(base_url());
	}
	public function tutorials()
	{
		$page_date['page_name'] = 'tutorials';
		$page_date['page_title'] = 'Tutorials';
		$page_date['js_page'] = '';
		$this->load->view('index', $page_date);
	}
}
