<?php

abstract class MY_Model extends CI_Model {
    
    public function __construct() {
        $this->load->database();
    }
    
    public abstract function getAll();
    public abstract function get($id);
    public abstract function add($object);
    public abstract function update($object);
    public abstract function delete($id);

}
