<?php

class ProjectModel extends MY_Model {

    public function add($object) {
        
    }

    public function delete($id) {
        
    }

    public function get($id) {
        
    }

    public function getAll() {
        $sql = "SELECT * FROM project";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function update($object) {
        
    }

}
