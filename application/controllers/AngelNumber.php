<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AngelNumber extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('welcome_m');
    }

    public function index()
    {
        $this->load->view('header');
        $this->load->view('angelnumber');
        $this->load->view('footer');
    }

    public function random_article(){
        $posts = $this->welcome_m->get_wp_posts_angel_number_category();
        $count = count($posts);
        if($count == 0){
            return;
        }
        $index = rand(0, $count - 1);
        $post = $posts[$index];

        $url_components = parse_url($post['guid']);
        $url = $url_components['scheme'] . "://" . $url_components['host'] . $post['permalink'];
    
        redirect($url);
    }
    
}
