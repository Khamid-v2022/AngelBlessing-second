<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AngelicDream extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('welcome_m');
    }

    public function index()
    {
        $posts = $this->welcome_m->get_wp_posts_with_image("Angelic Dream Interpretation");
        $show_posts = [];
        if(count($posts) <= 12){
            $show_posts = $posts;
        }
        else {
            $rand_keys = array_rand($posts, 12);
            for($i = 0; $i < 12; $i++){
                array_push($show_posts, $posts[$rand_keys[$i]]);
            }
        }

        $result_posts = [];
        foreach($show_posts as $post){
            $url_components = parse_url($post['guid']);
            $url = $url_components['scheme'] . "://" . $url_components['host'] . $post['permalink'];

            $item = array('url' => $url, 'image_path' => $post['image_path'], 'title' => $post['post_title']);
            array_push($result_posts, $item);
        }

        $data['random_posts'] = $result_posts;

        $data['title'] = "Discover Your Angelic Dream Interpretation";
        $this->load->view('header', $data);
        $this->load->view('angelic_dream', $data);
        $this->load->view('footer');
    }
}
