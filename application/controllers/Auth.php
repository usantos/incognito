<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
	{
		$this->load->view('auth');
    }

    public function signup()
	{
		$this->load->view('signup');
    }
}