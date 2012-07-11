<?php

class MysqlController extends AppController {
	var $uses = array('Country');
	
	function index() {
	
		$id = 1;
		if (!empty($_GET['id'])) {
			$id = intval($_GET['id']);
		}
	
		// find the country in the database
		$conditions = array('Country.id' => $id);
		$item = $this->Country->find('first', compact('conditions'));
		
		// pass the country to the view
		$title = 'MySQL Query Test';
		$this->set(compact('id', 'item', 'title'));
	}
}