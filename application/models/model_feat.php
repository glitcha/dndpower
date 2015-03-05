<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_Feat extends MY_Model {

	public $table_name = 'feat';

	public function getWithCharacterId($character_id) {

		return $this->db->query('
			SELECT 
				f.*, cf.id AS cf_id 
			FROM 
				feat f
			LEFT JOIN character_feat cf ON 
				cf.feat_id = f.id AND
				cf.character_id = ?
			ORDER BY
				f.type ASC, f.title
			', array($character_id))->result();	
	}

	public function getByCharacterId($character_id) {

		return $this->db->query('
			SELECT 
				f.*, cf.id AS cf_id 
			FROM 
				feat f
			INNER JOIN character_feat cf ON 
				cf.feat_id = f.id 
			WHERE
				cf.character_id = ?
			ORDER BY
				f.type ASC, f.title
			', array($character_id))->result();
	}

	public function addFeat($character_id, $feat_id) {
		$this->db->query('INSERT INTO character_feat (character_id, feat_id) VALUES (?, ?)', array((int) $character_id, (int) $feat_id));
	}

	public function removeAllFeats($character_id) {
		$this->db->query('DELETE FROM character_feat WHERE character_id = ?', array((int) $character_id));
	}
}