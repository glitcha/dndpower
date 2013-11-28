<?php

class LibImport extends LibAbstract {
	
	public $data = array();

	public $gliph_card = 'card:';

	public function importToDatabase() {

		$this->ci->load->model('Model_Power');

		$this->clear();
		$this->readFileToArray();
		
		$columns = $this->ci->Model_Power->getBlank();
		
		foreach ($this->data as $power) {

			foreach ($columns as $column_name => $column_value) {
				if ($column_name != 'id') {
					if (isset($power[$column_name])) {
						$this->ci->Model_Power->$column_name = $power[$column_name];	
					} else {
						$this->ci->Model_Power->$column_name = '';
					}
				}
			}
			$this->ci->Model_Power->id = null;
			$this->ci->Model_Power->insert();
		}
	}

	public function clear() {
		$this->ci->load->model('Model_Power');
		$this->ci->Model_Power->clear();
	}

	public function readFileToArray() {

		$raw = explode("\r\n", file_get_contents('./set.mse'));
		$card = null;

		$attr = '';
		$attr_name = '';
		$attr_pop = false;

		foreach ($raw as $row) {

			if ($row == $this->gliph_card) {
				if (count($card) != 0) {	
					$this->data[] = $card;
				}
				$card = array();
			} else {
				if ($card !== null) {

					$prop = explode(':', $row);

					// add the attr to the card
					if ($attr_pop == true && $this->level($row) != 2) {
						$card[$this->cleanName($attr_name)] = $attr;
						$attr_pop = false;
					}

					if ($this->level($row) == 1 && isset($prop[1]) && trim($prop[1]) == '') {
						$attr_pop = true;
						$attr_name = $prop[0];
						$attr = '';
					} else {
						if ($this->level($row) == 2) {
							$attr .= $this->cleanValue($row)."\r\n";
						} 
						if ($this->level($row) == 1) {
							$card[$this->cleanName($prop[0])] = $this->cleanValue($prop[1]);
						}
					}
				}
			}
		}
		$this->data[] = $card;
	}

	private function cleanValue($value) {
		return str_replace('$', '', strip_tags(trim($value)));
	}

	private function cleanName($name) {
		return str_replace(' ', '_', trim($name));
	}

	private function level($row) {

		//bug($row, substr($row, 1, 1));

		if (strlen($row) > 2) {
			if (substr($row, 1, 1) == "\t") {
				return 2;
			} else {
				if (substr($row, 0, 1) == "\t") {
					return 1;
				} else {
					return 0;
				}
			}
		} else {
			return 0;
		}
	}
}