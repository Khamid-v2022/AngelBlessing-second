<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EssentialOils extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('welcome_m');
    }

    public function index()
    {
        $posts = $this->welcome_m->get_wp_posts_with_image("Essential Oils");

        $result_posts = [];
        foreach($posts as $post){
            $url_components = parse_url($post['guid']);
            $url = $url_components['scheme'] . "://" . $url_components['host'] . $post['permalink'];

            $item = array('url' => $url, 'image_path' => $post['image_path'], 'title' => $post['post_title']);
            array_push($result_posts, $item);
        }

        $data['posts'] = $result_posts;
        $data['title'] = "Contact with Angels Using Essential Oils";
        $this->load->view('header', $data);
        $this->load->view('essential_oils');
        $this->load->view('footer');
    }

}
