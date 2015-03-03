<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_Power extends MY_Model {

	public $table_name = 'power';

	public function clear() {
		$this->db->query('DELETE FROM power');
	}

	public function getAll() {

		return $this->db->query('SELECT * FROM power ORDER BY super_type ASC, `level` ASC')->result();
	}

	public function getByClassAndCharacterId($class, $character_id) {

		return $this->db->query('
			SELECT p.*, cp.id AS cp_id FROM power p
			LEFT JOIN character_power cp ON 
				cp.power_id = p.id AND
				cp.character_id = ?
			WHERE 
				super_type = ? ORDER BY `level` ASC', array($character_id, $class))->result();	
	}

	public function removeFromCharacter($character_id, $power_id) {
		$this->db->query('DELETE FROM character_power WHERE character_id = ? AND power_id = ?', array($character_id, $power_id));	
	}

	public function addToCharacter($character_id, $power_id) {
		$this->db->query('INSERT INTO character_power (character_id, power_id) VALUES (?,?);', array($character_id, $power_id));
	}

	public function getByCharacterId($character_id) {

		return $this->db->query('
			SELECT p.*, cp.id AS cp_id 
			FROM power p
			INNER JOIN character_power cp ON 
				cp.power_id = p.id 
			WHERE 
				cp.character_id = ? 
			ORDER BY 
				`level` ASC', array($character_id))->result();	
	}
}