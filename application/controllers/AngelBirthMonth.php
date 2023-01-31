<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AngelBirthMonth extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['title'] = "Your Birthday Date Meaning.";
        $this->load->view('header', $data);
        $this->load->view('angelbirthmonth');
        $this->load->view('footer');
    }

}
