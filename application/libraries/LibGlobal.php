<?php

function bug() {

	$args = func_get_args();
	$ctu = false;

	foreach ($args as $name => $arg) {
		if ($arg == 'ctu') {
			$ctu = true;
		} else {
			echo '<pre>';
			echo '<h1>'.$name.'</h1>';
			var_dump($arg);
			echo '</pre>';
		}
	}

	if (!$ctu) {
		die();
	}
}

class LibGlobal {
	
}