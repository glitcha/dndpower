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

	public function feats($character_id) {

		$character_id = (int) $character_id;

		// supporting libs
		$this->load->model(array(
			'Model_Character',			
			'Model_Feat'
		));

		// handle posts
		if (count($_POST) > 0) {
			$this->Model_Feat->removeAllFeats($character_id);
			foreach ($_POST as $item => $value) {
				if (substr($item, 0, 5) == 'feat_') {
					$raw = explode('_', $item);
					$feat_id = (int) $raw[1];
					$this->Model_Feat->addFeat($character_id, $feat_id);
				}
			}
		}

		$data = array(
			'title' => 'Skills',
			'character' => $this->Model_Character->getById($character_id)
		);
		$data['feats'] = $this->Model_Feat->getWithCharacterId($data['character']->id);

		// render the page
		$this->load->view('view_page', array(
			'content' => $this->load->view('view_select_feats', $data, true),
		));
	}

	public function powers($character_id) {

		$character_id = (int) $character_id;

		// supporting libs
		$this->load->model(array(
			'Model_Character',			
			'Model_Power'
		));

		$data = array(
			'title' => 'Powers',
			'character' => $this->Model_Character->getById($character_id)
		);
		$data['powers'] = $this->Model_Power->getByClassAndCharacterId($data['character']->class, $data['character']->id);

		// render the page
		$this->load->view('view_page', array(
			'content' => $this->load->view('view_select_powers', $data, true),
		));
	}

	public function skills($character_id) {

		$character_id = (int) $character_id;

		// supporting libs
		$this->load->model(array(
			'Model_Character',			
			'Model_Skill'
		));

		// handle posts
		if (count($_POST) > 0) {
			$this->Model_Skill->removeAllSkills($character_id);
			foreach ($_POST as $item => $value) {
				if (substr($item, 0, 6) == 'skill_') {
					$raw = explode('_', $item);
					$skill_id = (int) $raw[1];
					$this->Model_Skill->addSkill($character_id, $skill_id);
				}
			}
		}

		$data = array(
			'title' => 'Powers',
			'character' => $this->Model_Character->getById($character_id)
		);
		$data['skills'] = $this->Model_Skill->getWithCharacterId($data['character']->id);

		// render the page
		$this->load->view('view_page', array(
			'content' => $this->load->view('view_select_skills', $data, true),
		));
	}

	public function view($character_id) {

		$character_id = (int) $character_id;

		$this->load->library(array(
			'LibStats'
		));
		$this->load->model(array(
			'Model_Character',
			'Model_Power',
			'Model_Feat',
			'Model_Skill'
		));

		$data = array(
			'record' => $this->Model_Character->getById($character_id)
		);
		$data['title'] = $data['record']->name;

		// populate the character with stats
		$this->libstats->populate($data['record']);

		// populate the powers
		$data['powers'] = $this->load->view('view_powers', array('powers' => $this->Model_Power->getByCharacterId($character_id)), true);

		// populate the feats
		$data['feats'] = $this->load->view('view_feats', array('feats' => $this->Model_Feat->getByCharacterId($character_id)), true);

		// populate the skills
		$data['skills'] = $this->load->view('view_skills', array('skills' => $this->libstats->loadSkillBonuses($this->Model_Skill->getWithCharacterId($character_id), $data['record'])), true);

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

			if(count($_FILES) > 0 && $_FILES['image']['name'] != '') {
				
				$image = $this->uploadImage('image', $image_errors);
				if(count($image_errors) == 0) {
					$this->Model_Character->image = $image['upload_data']['file_name'];
				}
				$data['image_errors'] = $image_errors;
			}

			// save the model
			$this->Model_Character->id = $id;
			$this->Model_Character->update();
		}

		// render the page
		$this->load->view('view_page', array(
			'content' => $this->load->view('view_form_character', $data, true),
		));
	}

	public function uploadImage($filename, &$errors) {
		
		$out = array();
				
		$install_path = $this->libglobal->install_path();

		$client_images_path = $install_path.'files/images';
				
		$config['upload_path'] = $client_images_path;
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['max_size']	= '4048';
		$config['max_width']  = '1924';
		$config['max_height']  = '1968';
		
		$this->load->library('upload', $config);

		if (!$this->upload->do_upload($filename)) {
			$errors = array('error' => $this->upload->display_errors());
		} else {
			$out = array('upload_data' => $this->upload->data());
		}
		
		return $out;
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
			'ac_bonus' => 'int',
			'hp' => 'int',
			'race' => 'string',
			'class' => 'string'
		);
	}
}