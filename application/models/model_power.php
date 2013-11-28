<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_Power extends MY_Model {

	public $table_name = 'power';

	public function clear() {
		$this->db->query('DELETE FROM power');
	}

	public function getAll() {

		return $this->db->query('SELECT * FROM power ORDER BY super_type ASC, `level` ASC')->result();
	}
}