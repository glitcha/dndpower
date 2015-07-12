<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Character extends CI_Controller {

    public function create() {

        $page = array(
            'content' => 'hello world'
        );

        echo $this->load->view('layout/page.php', $page, true);
    }
}
