<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SoulmateController extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('welcome_m');
    }

    public function index()
    {
        $data['title'] = "Find Your Next Soulmate";
        $this->load->view('header', $data);
        $this->load->view('soulmate');
        $this->load->view('footer');
    }

    public function random_article(){
        $posts = $this->welcome_m->get_wp_posts_with_category("soulmates");
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