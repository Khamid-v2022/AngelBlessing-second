<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class StoryOfAngel extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Welcome_m');
    }

    public function index()
    {
        $posts = $this->Welcome_m->get_wp_posts_with_image("Stories of Angels");
        $show_posts = [];
        if(count($posts) <= 9){
            $show_posts = $posts;
        }
        else {
            $rand_keys = array_rand($posts, 9);
            array_push($show_posts, $posts[$rand_keys[0]]);
            array_push($show_posts, $posts[$rand_keys[1]]);
            array_push($show_posts, $posts[$rand_keys[2]]);
            array_push($show_posts, $posts[$rand_keys[3]]);
            array_push($show_posts, $posts[$rand_keys[4]]);
            array_push($show_posts, $posts[$rand_keys[5]]);
            array_push($show_posts, $posts[$rand_keys[6]]);
            array_push($show_posts, $posts[$rand_keys[7]]);
            array_push($show_posts, $posts[$rand_keys[8]]);
        }

        $result_posts = [];
        foreach($show_posts as $post){
            $url_components = parse_url($post['guid']);
            $url = $url_components['scheme'] . "://" . $url_components['host'] . $post['permalink'];

            $item = array('url' => $url, 'image_path' => $post['image_path'], 'title' => $post['post_title']);
            array_push($result_posts, $item);
        }

        $data['random_posts'] = $result_posts;

        $data['title'] = "Discover Your Stories of Angels";
        $this->load->view('header', $data);
        $this->load->view('story_angel', $data);
        $this->load->view('footer');
    }
}
