<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class OrdersAngels extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['title'] = "Orders Angels";
        $this->load->view('header', $data);
        $this->load->view('orders-angels');
        $this->load->view('footer');
    }
}
