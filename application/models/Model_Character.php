<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Model_Character extends MY_Model {

    public function __construct() {
        $this->table_name = 'character';
        parent::__construct();
    }
}
