<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class LibForm extends LibAbstract {

	public function encode($fields, $view, $data) {

		if (isset($_POST[$fields[0]['name']])) {
			$this->libpopulate->autoFromPost($data['object'], $fields);
		} 
		
		return $this->ci->load->view($view, $data, true);
	}
}