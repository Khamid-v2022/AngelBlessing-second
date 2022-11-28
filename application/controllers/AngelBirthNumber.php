<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AngelBirthNumber extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('welcome_m');
    }

    public function index()
    {
        $this->load->view('header');
        $this->load->view('angelbirthnumber');
        $this->load->view('footer');
    }

}
