<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Model_Race extends MY_Model {

	public function __construct() {
		$this->table_name = 'race';
		parent::__construct();
	}
}
