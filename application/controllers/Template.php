<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Template extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Template_model', 'template_model');
    }
}
