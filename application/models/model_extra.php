<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_Extra extends MY_Model {

	public $table_name = 'extra';

	public function getByCharacterId($character_id) {
		return $this->db->query('SELECT * FROM extra WHERE character_id = ?', array($character_id))->result();
	}
}