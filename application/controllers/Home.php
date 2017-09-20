<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
    {
		parent::__construct();
		
		if($this->session->userdata['user_session'] == null)
			redirect('auth');

		$this->load->model('Chat_model', 'chat_model');
		$this->load->model('User_model', 'user_model');
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect('auth');
	}
	
	public function index()
	{
		$data = array(
            'to' => $this->session->userdata['user_session'][0]['id']
		 );

	    $allUsers = array_shuffle($this->user_model->getOppositeGender($this->session->userdata['user_session'][0]['gender'], $this->session->userdata['user_session'][0]['id']));

		//$this->output->enable_profiler(TRUE);
		
		$content = array(
			'users' => $allUsers
		);
		$this->load->view('home', $content);
	}
}
