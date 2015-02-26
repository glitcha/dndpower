<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Character extends CI_Controller {

	public function add() {
		

		$data = array(
			'title' => 'Add Character'
		);
		$data['record'] = new stdClass();

		$fields = $this->getFields();

		// load the record from post
		$this->libpopulate->autoFromPost($data['record'], $fields);
	
		// add validation
		$this->form_validation->set_rules('name', 'Name', 'required');
		if ($this->form_validation->run()) {

			// populate the model
			$this->libpopulate->autoFromPost($this->Model_Character, $fields);

			// save the model
			$id = $this->Model_Character->insert();
		}

		// render the page
		$this->load->view('view_page', array(
			'content' => $this->load->view('view_form_character', $data, true),
		));
	}

	public function edit() {

	}

	public function getFields() {
		return array(
			'name' => 'string',
			'str' => 'int',
			'con' => 'int',
			'dex' => 'int',
			'int' => 'int',
			'wis' => 'int',
			'cha' => 'int',
			'fortitude' => 'int',
			'reflex' => 'int',
			'will' => 'int'
		);
	}
}