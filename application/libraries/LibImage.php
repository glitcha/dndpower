<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class LibImage extends FBAbstract {
	
	public $configs = array();
	
	public function __construct() {
		
		parent::__construct();
		
		$this->configs['thumbnail'] = array(
			'image_library' => 'gd',
			'maintain_ratio' => true,
			'width' => 300,
			'height' => 300,
		);
		
		$this->configs['smail_thumbnail'] = array(
			'image_library' => 'gd',
			'maintain_ratio' => true,
			'width' => 150,
			'height' => 150,
		);
		
		$this->configs['tiny_thumbnail'] = array(
			'image_library' => 'gd',
			'maintain_ratio' => true,
			'width' => 58,
			'height' => 58,
		);
		
		$this->configs['events_manager'] = array(
			'image_library' => 'gd',
			'maintain_ratio' => false,
			'width' => 37,
			'height' => 37,
		);
		
		$this->configs['rss'] = array(
			'image_library' => 'gd',
			'maintain_ratio' => false,
			'width' => 66,
			'height' => 66,
		);

		$this->configs['40x40'] = array(
			'image_library' => 'gd',
			'maintain_ratio' => true,
			'width' => 40,
			'height' => 40,
		);
	}
	
	public function getImageDirectoryURL() {
	
		$client = $this->ci->fbclient->getCurrent();
		$this->ci->fbclient->checkClientDirectory($client['id']);
		
		$out = '/clients/'.$client['id'].'/images/';
		
		return $out;
	}
	
	public function render($filename, $config_name, $path = '', $transition = 'resize', $domain = '', $pathonly = false) {
		
		$out = '';
		
		// TODO: remove this it is done when a new client is created
		// make sure the client directory is setup correctly
		$client = $this->ci->fbclient->getCurrent();
		$this->ci->fbclient->checkClientDirectory($client['id']);
		
		$install_path = $this->ci->fbglobalfunction->install_path();
		$path .= $filename;
		
		$new_file_name = str_replace('.', '__'.$client['id'].'__'.$config_name.'.', $filename);
		$source = $install_path.'clients/'.$client['id'].'/images/'.$filename;
		$dest = $install_path.'clients/'.$client['id'].'/cache/'.$new_file_name;
		
		// if does not exist create it
		if(file_exists($dest) == false) {
			
			// load the config
			$config = $this->configs[$config_name];
			$config['image_library'] = 'gd2';
			$config['source_image'] = $source;
			$config['new_image'] = $dest;

			$this->ci->load->library('image_lib');
			$this->ci->image_lib->initialize($config); 
						
			switch ($transition) {
				case 'resize':
					$this->ci->image_lib->resize();
					break;
					
				case 'crop':
					$this->ci->image_lib->crop();
					break;
			}

		}
		
		if ($pathonly) {
			$out = $domain.'clients/'.$client['id'].'/cache/'.$new_file_name;
		} else {
			$out = '<img src="'.$domain.'/clients/'.$client['id'].'/cache/'.$new_file_name.'"/>';
		}
				
		return $out;
	}
}