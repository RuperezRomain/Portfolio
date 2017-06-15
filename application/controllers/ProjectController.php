<?php

class ProjectController extends CI_Controller {

    public function findAllProjects() {
        $this->load->model('ProjectModel');
        $projects = $this->ProjectModel->getAll();

        $this->output->set_content_type('application/json');
        $this->output->set_output(json_encode($projects));
    }

}
