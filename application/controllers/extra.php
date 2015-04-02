<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Extra extends CI_Controller {

	public function add($character_id) {

		$character_id = (int) $character_id;

		// supporting libs
		$this->load->model(array(
			'Model_Character',			
			'Model_Extra'
		));

		$data = array(
			'title' => 'Characters',
			'character' => $this->Model_Character->getById($character_id),
			'characters' => $this->Model_Character->getAll(),
			'action' => '/extra/add/'.$character_id,
			'record' => new stdClass(),
			'character_id' => $character_id
		);

		$fields = $this->getFields();

		// load the record from post
		$this->libpopulate->autoFromPost($data['record'], $fields);

		// add validation
		$this->form_validation->set_rules('title', 'Title', 'required');
		if ($this->form_validation->run()) {

			// populate and save the model
			$this->libpopulate->autoFromPost($this->Model_Extra, $fields);
			$this->Model_Extra->id = null;
			$this->Model_Extra->character_id = $character_id;
			$this->Model_Extra->insert();

			// handle the image upload
			if(count($_FILES) > 0 && $_FILES['image']['name'] != '') {
				
				$image = $this->uploadImage('image', $image_errors);

				if(count($image_errors) == 0) {
					$this->Model_Extra->image = $image['upload_data']['file_name'];
				}
				$data['image_errors'] = $image_errors;
			}

			$this->Model_Extra->update();

			// redirect
			redirect('/extra/edit/'.$this->Model_Extra->id);
		}

		// render the page
		$this->load->view('view_page', array(
			'content' => $this->load->view('view_form_extra', $data, true),
		));
	}

	public function edit($extra_id) {

		$extra_id = (int) $extra_id;

		// supporting libs
		$this->load->model(array(
			'Model_Character',			
			'Model_Extra'
		));

		$data = array(
			'title' => 'Extra',
			'record' => $this->Model_Extra->getById($extra_id)
		);
		$data['action'] = '/extra/edit/'.$data['record']->id;
		$data['character_id'] = $data['record']->character_id;
		$data['character'] = $this->Model_Character->getById($character_id);

		$fields = $this->getFields();

		// load the record from post
		if (isset($_POST['name']))
			$this->libpopulate->autoFromPost($data['record'], $fields);

		// add validation
		$this->form_validation->set_rules('title', 'Title', 'required');
		if ($this->form_validation->run()) {

			// populate and save the model
			$this->Model_Extra->id = $extra_id;
			$this->libpopulate->autoFromPost($this->Model_Extra, $fields);
			
			// handle the image upload
			if(count($_FILES) > 0 && $_FILES['image']['name'] != '') {
				
				$image = $this->uploadImage('image', $image_errors);

				if(count($image_errors) == 0) {
					$this->Model_Extra->image = $image['upload_data']['file_name'];
				}
				$data['image_errors'] = $image_errors;
			}

			$this->Model_Extra->update();

			// redirect
			redirect('/extra/edit/'.$this->Model_Extra->id);
		}

		// render the page
		$this->load->view('view_page', array(
			'content' => $this->load->view('view_form_extra', $data, true),
		));
	}

	public function delete($extra_id) {

		$data = array();

		$this->load->model('Model_Extra');	

		$extra = $this->Model_Extra->getById($extra_id);
		
		if($this->input->post('delete_request') == 'true') {
			$this->Model_Extra->delete($extra_id);
			redirect('/character/extras/'.$extra->character_id);
		}
	
		$data['post_link'] = '/extra/delete/'.$extra_id;
		$data['cancel_link'] = '/character/extras/'.$extra->character_id;
		
		// render the page
		$this->load->view('view_page', array(
			'content' => $this->load->view('view_delete', $data, true),
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
			'title' => 'string',
			'note' => 'string'
		);
	}
}