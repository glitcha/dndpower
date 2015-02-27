<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_Character extends MY_Model {

	public $table_name = 'character';

	public function getAll() {

		return $this->db->query('SELECT * FROM `character` ORDER BY level DESC')->result();
	}
}