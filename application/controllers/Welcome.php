<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('wecome_m');
    }

    public function index()
    {
        $this->load->view('header');
        $this->load->view('welcome');
        $this->load->view('footer');
    }
   
    public function random_article($color){
        // echo $color;
        $this->wecome_m->get_wp_posts($color);
    }
}
