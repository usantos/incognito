<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model', 'user_model');
        $this->load->model('Chat_model', 'chat_model');
    }

    public function signin(){
        $data = array(
            'email' => $this->input->post('email'),
            'password' => $this->input->post('password'),
         );
		 
        $user_data = $this->user_model->signin($data);
        if($user_data != null){
            $this->session->set_userdata('user_session', $user_data);
            redirect('home/index');
        }else{
            $this->load->view('auth');
        }
    }

    public function get(){
        header('Content-Type: application/json');
        print_r(json_encode( $this->user_model->get($this->session->userdata['user_session'][0]['id']) ) );
    }

    public function getByGender(){
        $users = array_shuffle($this->user_model->getByGender($this->input->post('gender'), $this->session->userdata['user_session'][0]['id']));
        header('Content-Type: application/json');
        print_r(json_encode($users));
    }
	
    public function getOppositeGender(){
        $users = array_shuffle($this->user_model->getOppositeGender($this->input->post('gender'), $this->session->userdata['user_session'][0]['id']));
        header('Content-Type: application/json');
        print_r(json_encode($users));
    }

    public function save()
    {
        $formData = array(
            'name' => $this->input->post('name'),
            'gender' => $this->input->post('gender'),
            'email' => $this->input->post('email'),   
            'username' => $this->input->post('username'),
            'password' => $this->input->post('password'),
            'photo' => ""
         );
		 
        if($this->user_model->save($formData)){
            return true;
        }else{
            return false;
        }
    }
}