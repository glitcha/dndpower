<?php

class LibAbstract {
	
	protected $ci = null;
	
	public function __construct() {
		$this->ci = & get_instance();

	}
}