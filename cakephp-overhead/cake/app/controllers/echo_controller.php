<?php

class EchoController extends AppController {

	// no models are required
	var $uses = array();

	function doEcho() {
		// turn off template rendering
		$this->autoRender = false;
		
		// echo the output
		echo "This is PHP\n";
	}
	
	function template() {
		// pass some variables to the template
		
		$title = "PHP Template Rendering";
		$variables = "variables";
		
		$this->set(compact('title', 'variables'));
	}
	
	function rewrite() {
		$title = 'mod_rewrite test';
		$this->set(compact('title'));
	}
	
	function doRedirect() {
		$this->redirect('/echo.php');
	}
	
}