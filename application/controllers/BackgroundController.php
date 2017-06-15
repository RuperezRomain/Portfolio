<?php

class BackgroundController extends CI_Controller {

    
        public function findAllBackgrounds() {
        $this->load->model('BackgroundModel');
        $backgrounds = $this->BackgroundModel->getAll();

        $this->output->set_content_type('application/json');
        $this->output->set_output(json_encode($backgrounds));
    }
}
