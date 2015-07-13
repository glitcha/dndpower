<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Character extends CI_Controller {

	public function create() {

		$this->load->library(array('LibForm'));
		$this->load->model(array(
			'Model_Race',
			'Model_Class'
		));

		$fields = $this->getFields();

		$data = array(				
			'action' => 'character/create',
			'title' => 'Create Character',
			'object' => new stdClass(),
			'races' => $this->libpopulate->resultToDropDownData($this->Model_Race->getAll(), 'id', 'title'),
			'classes' => $this->libpopulate->resultToDropDownData($this->Model_Class->getAll(), 'id', 'title'),
		);
		$this->libpopulate->populateObjectWithBlank($data['object'], $fields);
		
		$page = array(
			'content' => $this->libform->encode($fields, 'character/form_character', $data)
		);

		echo $this->load->view('layout/page.php', $page, true);
	}

	private function getFields() {
		return array(
			array(
				'name' => 'name',
				'type' => 'string'
			),
			array(
				'name' => 'race_id',
				'type' => 'int'
			),
			array(
				'name' => 'class_id',
				'type' => 'int'
			),
			array(
				'name' => 'level',
				'type' => 'int'
			),
			array(
				'name' => 'strength',
				'type' => 'int'
			),
			array(
				'name' => 'constitution',
				'type' => 'int'
			),
			array(
				'name' => 'dexterity',
				'type' => 'int'
			),
			array(
				'name' => 'intelligence',
				'type' => 'int'
			),
			array(
				'name' => 'wisdom',
				'type' => 'int'
			),
			array(
				'name' => 'charisma',
				'type' => 'int'
			),
			array(
				'name' => 'hp',
				'type' => 'int'
			)
		);
	}
}
