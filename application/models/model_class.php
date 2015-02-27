<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_Class extends MY_Model {

	public $table_name = 'class';

	public function getAll() {
		return $this->db->query('SELECT * FROM class ORDER BY title ASC')->result();
	}
}