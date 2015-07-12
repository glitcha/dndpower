<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Characters extends CI_Controller {

	public function browse() {

		echo $this->load->view('layout/page.php', null, true);
	}
}
