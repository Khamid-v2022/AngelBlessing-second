<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FortuneCookieMessage extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('welcome_m');
    }

    public function index()
    {
        $data['title'] = "Choose Your Fortune Cookie For The Day";
        $this->load->view('header', $data);
        $this->load->view('fortune-cookie-message', $data);
        $this->load->view('footer');
    }
    
     public function random_article(){
        $posts = $this->welcome_m->get_wp_posts_with_category("Fortune Cookie Message");
        $count = count($posts);
        if($count == 0){
            $this->index();
            return;
        }
        $index = rand(0, $count - 1);
        $post = $posts[$index];

        $url_components = parse_url($post['guid']);
        $url = $url_components['scheme'] . "://" . $url_components['host'] . $post['permalink'];
    
        redirect($url);
    }
}
