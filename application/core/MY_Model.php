<?php defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Model extends CI_Model {

    public $table_name = '';

    public function __construct() {
        parent::__construct();
    }

    public function getAll() {
    	return $this->db->get($this->table_name)->result();
    }
}
