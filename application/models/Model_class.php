<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Model_Class extends MY_Model {

	public function __construct() {
		$this->table_name = 'class';
		parent::__construct();
	}
}
