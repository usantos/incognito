<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Chat extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        if($this->session->userdata['user_session'] == null)
            redirect('auth');

        $this->load->model('Chat_model', 'chat_model');
        $this->load->model('User_model', 'user_model');
    }

    public function delete()
    {
        if($this->chat_model->delete($this->input->post('id'))){
            echo true;
         }else{
             echo false;
         }
    }

	public function send()
	{
        $this->output->set_header("HTTP/1.0 200 OK");
        $this->output->set_header("HTTP/1.1 200 OK");
        $this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate");
        $this->output->set_header("Cache-Control: post-check=0, pre-check=0");
        $this->output->set_header("Pragma: no-cache");
        
        $retorno = false;    

        $data = array(
            'to' => $this->input->post('to'),
            'from' => $this->session->userdata['user_session'][0]['id'],
            'message' => $this->input->post('message')  
         );
        if($this->chat_model->send($data)){
            $retorno = true;
        }
        header('Content-Type: application/json');
        print_r(json_encode($retorno));
    }
    
    public function get()
	{
        $data = array(
            'to' => $this->session->userdata['user_session'][0]['id']
         );
         
         header('Content-Type: application/json');
         print_r(json_encode( $this->chat_model->get($data)) );
	}
}   