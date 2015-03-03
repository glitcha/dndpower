<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_Skill extends MY_Model {

	public function getWithCharacterId($character_id) {

		return $this->db->query('
			SELECT 
				s.*, cs.id AS cs_id 
			FROM 
				skill s
			LEFT JOIN character_skill cs ON 
				cs.skill_id = s.id AND
				cs.character_id = ?
			', array($character_id))->result();	
	}

	public function addSkill($character_id, $skill_id) {
		$this->db->query('INSERT INTO character_skill (character_id, skill_id) VALUES (?, ?)', array((int) $character_id, (int) $skill_id));
	}

	public function removeAllSkills($character_id) {
		$this->db->query('DELETE FROM character_skill WHERE character_id = ?', array((int) $character_id));
	}
}