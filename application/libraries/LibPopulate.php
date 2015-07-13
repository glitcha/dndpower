<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class LibPopulate extends LibAbstract {

	public function autoFromAuto(&$object, $data, $fieldlist) {

		foreach ($fieldlist as $field_name => $field_type) {

			if (is_array($data)) {
				if (isset($data[$field_name])) {
					$this->setVal($object, $field_name, $data[$field_name]);
				} else {
					$this->setVal($object, $field_name, null);
				}
			} else {
				if (property_exists($data, $field_name)) {
					$this->setVal($object, $field_name, $data->$field_name);
				}
			}
		}
	}

	public function autoFromPost(&$object, $fieldlist) {
		var_dump($fieldlist);
		foreach ($fieldlist as $field_index => $field) {

			$value = null;

			if (isset($_POST[$field['name']])) 
				$value = $this->ci->input->post($field['name']);

			switch ($field['type']) {
				case 'string':

					$this->setVal($object, $field['name'], $value);
					break;
				case 'bool':
					$val = ($value == 'on' || $value === true || $value == 1) ? 1 : 0;
					$this->setVal($object, $field['name'], $val);
					break;
				case 'int':
					$this->setVal($object, $field['name'], $this->intForNull($value));
					break;
				case 'date':
					$val = ($value == '') ? null : $value;
					$this->setVal($object, $field['name'], $val);
					break;
				case 'float':
					$this->setVal($object, $field['name'], $this->floatForNull($value));
					break;
			}
		}

	}

	private function hasVal($object, $field) {
		if (is_array($object)) {
			return isset($object[$field]);
		} else {
			return isset($object->$field);
		}
	}

	private function getVal($object, $field) {
		if (is_array($object)) {
			return $object[$field];
		} else {
			return $object->$field;
		}
	}

	private function setVal(&$object, $field, $value) {

		if (is_array($object)) {
			$this->setArrayVal($object, $field, $value);
		} else {
			$this->setObjectVal($object, $field, $value);
		}
	}

	private function setArrayVal(&$object, $field, $value) {

		$object[$field] = $value;
	}

	private function setObjectVal(&$object, $field, $value) {

		$object->$field = $value;
	}

	public function populateFromPostByObject(&$object) {

		foreach ($object as $item => $value) {
			if (isset($_POST[$item])) {
				$object->$item = $this->ci->input->post($item);
			}
		}

		return $object;
	}

	public function populateCheckboxesFromPost(&$object, $checkboxes) {

		foreach ($checkboxes as $checkbox) {
			if (isset($_POST[$checkbox])) {
				$object->$checkbox = true;
			} else {
				$object->$checkbox = false;
			}
		}
	}

	public function intForNull($value) {
		return ($value == '') ? null : (int) $value;
	}

	public function floatForNull($value) {
		return ($value == '') ? null : (float) $value;
	}

	public function nullIfZeroString(&$object, $fields) {

		foreach ($fields as $field) {
			if ($object->$field == '') {
				$object->$field = null;
			}
		}
	}

	public function populateArrayFromPost(&$array, $fieldlist) {

		foreach ($fieldlist as $field) {
			$array[$field] = $this->ci->input->post($field);
		}
	}

	public function populateArrayFromPostInts(&$array, $fieldlist) {

		foreach ($fieldlist as $field) {
			$array[$field] = (int) $this->ci->input->post($field);
		}
	}

	public function populateObjectFromPost(&$object, $fieldlist) {

		foreach ($fieldlist as $field) {
			$object->$field = $this->ci->input->post($field);
		}
	}

	public function populateArrayFromObject(&$array, $source, $fieldlist) {

		foreach ($fieldlist as $field) {
			$array[$field] = $source->$field;
		}
	}

	public function populateArrayWithBlank(&$array, $fieldlist) {

		foreach ($fieldlist as $field) {
			$array[$field] = '';
		}

		return $array;
	}

	public function populateObjectWithBlank(&$object, $fieldlist) {
		
		foreach ($fieldlist as $field) {
			$field_name = $field['name'];
			$object->$field_name = '';
		}

		return $object;
	}

	public function populateObjectWithObject($source, $destination) {

		foreach ($source as $item => $value) {
			$destination->$item = $value;
		}
	}

	public function populateArrayWithModel($model) {

		$array = array();

		foreach ($this->ci->$model as $field => $value) {

			if ($value == '0000-00-00 00:00:00') {
				$value = '';
			}
			$array[$field] = $value;
		}

		return $array;
	}

	public function populateObjectWithArrayByFields($source, &$target, $fields) {

		foreach ($fields as $field) {
			if (isset($source[$field])) {
				$target->$field = $source[$field];
			}
		}
	}

	public function populateArrayWithObjectByFields($source, &$target, $fields) {

		foreach ($fields as $field) {
			if (isset($source->$field)) {
				$target[$field] = $source->$field;
			}
		}
	}

	public function populateObjectWithObjectByFields($source, &$target, $fields) {

		foreach ($fields as $field) {

			if (property_exists($source, $field)) {
				$target->$field = $source->$field;
			}
		}
	}

	public function resultToDropDownData($results, $id_field, $title_field, $title_field2 = '', $no_value_title = null) {

		$out = array();

		if ($no_value_title != null) {
			$out[''] = $no_value_title;
		}

		foreach($results as $row) {
			$title = ($title_field2 == '') ? $row->$title_field : $row->$title_field.' '.$row->$title_field2;
			$out[$row->$id_field] = $title;
		}

		return $out;
	}

	public function objectArrayFieldToArray($data, $field) {

		$out = array();

		foreach ($data as $row) {
			$out[] = $row->$field;
		}

		return $out;
	}

}
