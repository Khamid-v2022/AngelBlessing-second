<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DailyHoroscope extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->view('header');
        $this->load->view('horoscope_main');
        $this->load->view('footer');
    }
}
