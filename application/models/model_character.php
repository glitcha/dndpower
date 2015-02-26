<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_Power extends MY_Model {

	public $table_name = 'character';

	public function getAll() {

		return $this->db->query('SELECT * FROM character ORDER BY super_type ASC, `level` ASC')->result();
	}
}