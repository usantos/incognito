<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Message extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();

        if($this->session->userdata['user_session'] == null)
            redirect('auth');
    }

    public function index()
    {
        $this->load->view('messages');
    }
}