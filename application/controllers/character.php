<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Character extends CI_Controller {

	public function browse() {
		
		// supporting libs
		$this->load->model(array(
			'Model_Character'			
		));

		$data = array(
			'title' => 'Characters',
			'characters' => $this->Model_Character->getAll()
		);

		// render the page
		$this->load->view('view_page', array(
			'content' => $this->load->view('view_character_browse', $data, true),
		));
	}

	public function add_power($character_id, $power_id) {

		$character_id = (int) $character_id;
		$power_id = (int) $power_id;

		$this->load->model(array('Model_Power'));
		$this->Model_Power->addToCharacter($character_id, $power_id);

		redirect('/character/powers/'.$character_id);
	}

	public function remove_power($character_id, $power_id) {

		$character_id = (int) $character_id;
		$power_id = (int) $power_id;

		$this->load->model(array('Model_Power'));
		$this->Model_Power->removeFromCharacter($character_id, $power_id);

		redirect('/character/powers/'.$character_id);
	}

	public function powers($character_id) {

		$character_id = (int) $character_id;

		// supporting libs
		$this->load->model(array(
			'Model_Character',
			'Model_Class',
			'Model_Race',
			'Model_Power'
		));

		$data = array(
			'title' => 'Powers',
			'character' => $this->Model_Character->getById($character_id)
		);
		$data['powers'] = $this->Model_Power->getByClassAndCharacterId($data['character']->class, $data['character']->id);

		// render the page
		$this->load->view('view_page', array(
			'content' => $this->load->view('view_powers', $data, true),
		));
	}

	public function view($character_id) {

		$character_id = (int) $character_id;

		$this->load->model(array(
			'Model_Character',
			'Model_Power'
		));

		$data = array(
			'record' => $this->Model_Character->getById($character_id)
		);
		$data['title'] = $data['record']->name;

		// render the page
		$this->load->view('view_page', array(
			'content' => $this->load->view('view_character', $data, true),
		));
	}

	public function add() {
		
		// supporting libs
		$this->load->model(array(
			'Model_Character',
			'Model_Class',
			'Model_Race',
			'Model_Power'
		));

		$data = array(
			'title' => 'Add Character',
			'action' => '/character/add',
			'classes' => $this->libpopulate->resultToDropDownData($this->Model_Class->getAll(), 'title', 'title'), 
			'races' => $this->libpopulate->resultToDropDownData($this->Model_Race->getAll(), 'title', 'title'), 
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
			
			// redirect
			redirect('/character/edit/'.$id);			
		}

		// render the page
		$this->load->view('view_page', array(
			'content' => $this->load->view('view_form_character', $data, true),
		));
	}

	public function edit($id) {

		$id = (int) $id;

		// supporting libs
		$this->load->model(array(
			'Model_Character',
			'Model_Class',
			'Model_Race',
			'Model_Power'
		));

		$data = array(
			'classes' => $this->libpopulate->resultToDropDownData($this->Model_Class->getAll(), 'title', 'title'), 
			'races' => $this->libpopulate->resultToDropDownData($this->Model_Race->getAll(), 'title', 'title'), 
			'action' => '/character/edit/'.$id
		);
		$data['record'] = $this->Model_Character->getById($id);
		$data['title'] = $data['record']->name;

		$fields = $this->getFields();

		// load the record from post
		if (isset($_POST['name']))
			$this->libpopulate->autoFromPost($data['record'], $fields);
	
		// add validation
		$this->form_validation->set_rules('name', 'Name', 'required');
		if ($this->form_validation->run()) {

			// populate the model
			$this->libpopulate->autoFromPost($this->Model_Character, $fields);

			// save the model
			$this->Model_Character->id = $id;
			$this->Model_Character->update();
		}

		// render the page
		$this->load->view('view_page', array(
			'content' => $this->load->view('view_form_character', $data, true),
		));
	}

	public function getFields() {
		return array(
			'name' => 'string',
			'level' => 'int',
			'str' => 'int',
			'con' => 'int',
			'dex' => 'int',
			'int' => 'int',
			'wis' => 'int',
			'cha' => 'int',
			'fortitude_bonus' => 'int',
			'reflex_bonus' => 'int',
			'will_bonus' => 'int',
			'hp' => 'int',
			'race' => 'string',
			'class' => 'string'
		);
	}
}