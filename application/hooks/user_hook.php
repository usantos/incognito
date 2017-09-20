<?php
defined('BASEPATH') OR exit('No direct script access allowed');

public user_hook(){
   if( $this->session->userdata['user_session'][0] == null){
        redirect("auth");
   }
}