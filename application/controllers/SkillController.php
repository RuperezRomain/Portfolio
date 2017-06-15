<?php

class SkillController extends CI_Controller {
    
    public function findAllSkills() {
        $this->load->model('SkillModel');
        $skills = $this->SkillModel->getAll();

        $this->output->set_content_type('application/json');
        $this->output->set_output(json_encode($skills));
    }
    
}
