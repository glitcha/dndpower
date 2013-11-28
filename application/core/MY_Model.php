<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Model extends CI_Model  {

	public function __construct()  {
	
		parent::__construct();
	}

	public function loadBlank() {

		$object = $this->getBlank();
		$this->populateByObject($object);
	}
	
	public function getBlank() {

		$sql = 'SHOW COLUMNS FROM `'.$this->table_name.'`;';
		$result = $this->db->query($sql, array())->result();
		$object = new stdClass();

		foreach ($result as $item) {
			$field = $item->Field;
			$object->$field = null;
		}
		
		return $object;

	}

	public function populateByObject($object) {

		foreach ($object as $item => $value) {
			$this->$item = $value;
		}
	}
	
	public function setDateField($field_name, $value) {
	
		if ($value == null || $value == '') {
			$this->$field_name = $value;
		}
		else {
			$this->field_name = $this->fbglobalfunction->dateToMySQL($value);
		}
	}
	
	public function update() {
		
		$this->db->where('id', $this->id);
		$this->db->update($this->table_name, $this->toArray());
	}
	
	public function insert() {
	
		$this->db->insert($this->table_name, $this->toArray());
		$this->id = $this->db->insert_id();

		return $this->id;
	}
	
	public function delete($id = null) {
		
		if ($id == null)
			$id = $this->id;
			
		$this->db->where('id', $id);
		$this->db->delete($this->table_name);
	}	
	
	public function getById($id) {
	
		$out = null;
	
		$sql = "SELECT * FROM `".$this->table_name."` WHERE id = ".$this->db->escape($id);
		$data = $this->db->query($sql)->result();
		
		if (count($data) > 0) {
			$out = $data[0];	
		}
		
		return $out;
	}

	public function load($id) {
	
		$id = (int) $id;
	
		$sql = "SELECT * FROM `".$this->table_name."` WHERE id = ".$this->db->escape($id);
		$data = $this->db->query($sql);
		
		if($data->num_rows > 0) {
			
			$result = $data->result();
			$result = $result[0];
				
			foreach ($result as $field => $value) {
				$this->$field = $value;
			}
		}
	}
	
	public function getAll() {
		
		$result = $this->db->query("SELECT * FROM ".$this->table_name.';')->result();
		
		return $result;
	}
	
	public function toArray() {
		
		$out = array();

		foreach ($this as $field => $value) {
			if ($field != 'table_name') {
				$out[$field] = $value;
			}
		}
		
		return $out;
	}
	
	public function toClass() {
		
		$out = new stdClass();
		
		foreach ($this as $field => $value) {
			if ($field != 'table_name') {
				$out->$field = $value;
			}
		}
		
		return $out;
	}
}