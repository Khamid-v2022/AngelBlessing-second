<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AngelicAromatherapy extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('welcome_m');
    }

    public function index()
    {
        $posts = $this->welcome_m->get_wp_posts_with_image("Angelic Aromatherapy");
        $show_posts = [];
        // pick random 6 posts
        if(count($posts) <= 6){
            $show_posts = $posts;
        }
        else {
            $rand_keys = array_rand($posts, 6);
            array_push($show_posts, $posts[$rand_keys[0]]);
            array_push($show_posts, $posts[$rand_keys[1]]);
            array_push($show_posts, $posts[$rand_keys[2]]);
            array_push($show_posts, $posts[$rand_keys[3]]);
            array_push($show_posts, $posts[$rand_keys[4]]);
            array_push($show_posts, $posts[$rand_keys[5]]);
        }

        $result_posts = [];
        foreach($show_posts as $post){
            $url_components = parse_url($post['guid']);
            $url = $url_components['scheme'] . "://" . $url_components['host'] . $post['permalink'];

            $item = array('url' => $url, 'image_path' => $post['image_path'], 'title' => $post['post_title']);
            array_push($result_posts, $item);
        }

        $data['random_posts'] = $result_posts;

        $data['title'] = "Choose Your Angelic Aromatherapy Today";
        $this->load->view('header', $data);
        $this->load->view('angelic_aromatherapy', $data);
        $this->load->view('footer');
    }
    
}
