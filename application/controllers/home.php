<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index() {

		$this->load->model('Model_Power');

		$data = array(
			'powers' => $this->Model_Power->getAll(),
		);

		$this->load->view('view_page', $data);
	}
}