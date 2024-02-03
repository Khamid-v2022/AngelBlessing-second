<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FiveElementController extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['title'] = "Five Element Reading";
        $this->load->view('header', $data);
        $this->load->view('five-element');
        $this->load->view('footer');
    }

}