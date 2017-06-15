<?php

class BackgroundModel extends MY_MODEL {

    public function add($object) {
        
    }

    public function delete($id) {
        
    }

    public function get($id) {
        
    }

    public function getAll() {
        $sql = "SELECT * FROM background";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function update($object) {
        
    }

}
