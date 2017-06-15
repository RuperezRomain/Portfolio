<?php

class KnowledgeController extends CI_Controller {

    public function findAllKnowledges() {
        $this->load->model('KnowledgeModel');
        $knowledges = $this->KnowledgeModel->getAll();

        $this->output->set_content_type('application/json');
        $this->output->set_output(json_encode($knowledges));
    }

}
