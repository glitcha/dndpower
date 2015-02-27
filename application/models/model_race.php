<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_Race extends MY_Model {

	public $table_name = 'race';

	public function getAll() {
		return $this->db->query('SELECT * FROM race ORDER BY title ASC')->result();
	}
}