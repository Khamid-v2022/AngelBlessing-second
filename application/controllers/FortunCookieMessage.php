<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FortunCookieMessage extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('welcome_m');
    }

    public function getRandomMessage(){
        $messages = $this->welcome_m->getFortunCookieMessages();

        $count = count($messages);
        if($count == 0){
            echo '';
        }

        $index = rand(0, $count - 1);
        $message = $messages[$index];

        echo $message['message'];
    }
}
