<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Power extends CI_Controller {

	public function render($id) {

		$this->load->model('Model_Power');

		$data = array(
			'power' => $this->Model_Power->getById((int) $id)
		);

		$this->load->view('view_power', $data);
	}

}