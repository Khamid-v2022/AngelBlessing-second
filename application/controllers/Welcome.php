<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('welcome_m');
    }

    public function index()
    {
        $data['title'] = "Angel Color Doors";
        $this->load->view('header', $data);
        $this->load->view('welcome');
        $this->load->view('footer');
    }
   
    public function random_article($color){
        // echo $color;
        $posts = $this->wecome_m->get_wp_posts($color);

        $count = count($posts);
        $index = rand(0, $count - 1);
        $post = $posts[$index];

        $url_components = parse_url($post['guid']);
        $url = $url_components['scheme'] . "://" . $url_components['host'] . $post['permalink'];
    
        redirect($url);
    }
}
