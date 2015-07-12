<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class LibAbstract {

	protected $ci = null;

	public function __construct() {
		$this->ci = & get_instance();

	}
}
