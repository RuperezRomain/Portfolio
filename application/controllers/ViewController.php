<?php

class ViewController extends CI_Controller {

    public function Home() {
        $this->load->view('template/header');
    $this->load->view('home/home.php');
    }

}
