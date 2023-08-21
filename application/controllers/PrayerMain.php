<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PrayerMain extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('welcome_m');
    }

    public function index()
    {
        $data['title'] = "Choose Your Prayer of The Day";
        $this->load->view('header', $data);
        $this->load->view('prayer-of-the-day');
        $this->load->view('footer');
    }

    public function random_article($category_name){
        $category_name = str_replace( "-", " ", $category_name);

        $posts = $this->welcome_m->get_wp_posts_with_category(urldecode($category_name));
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
