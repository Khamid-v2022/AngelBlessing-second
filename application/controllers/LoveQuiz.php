<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoveQuiz extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('welcome_m');
    }

    public function index()
    {
        $this->load->view('header');
        $this->load->view('lovequiz');
        $this->load->view('footer');
    }

    public function tarot_card($topic_category, $title){
        $data['topic_category'] = $topic_category;
        $data['topic_title'] = str_replace("-"," ", $title);
        $this->load->view('header');
        $this->load->view('tarot-card', $data);
        $this->load->view('footer');
    }

    public function getRandomPost(){
        $request = $this->input->post();
        $posts = $this->welcome_m->get_wp_posts_tarot_card_with_image($request['topic_category']);

        $count = count($posts);
        if($count == 0){
            echo json_encode(array('status'=> false, 'message'=> 'no posts'));
            return;
        }
        
        $index = rand(0, $count - 1);
        $post = $posts[$index];

        $url_components = parse_url($post['guid']);
        $response['url'] = $url_components['scheme'] . "://" . $url_components['host'] . $post['permalink'];
        $response['image'] = $post['image_path'];
        $response['title'] =  $post['post_title'];
        $response['content'] = $post['post_content'];

        echo  json_encode(array('status'=> true, 'message'=> $response));
        return;
    }


}
