<?php

class Test extends MY_Controller{
	
	function __constructor(){
		
		parent::MY_Controller();
		
	}
	
	function index(){
		
		$this->error->set('first error');
		$this->error->set('second error', false, true);
		$this->error->set('third error', true, true);
		
		$this->flash_message->set('success!','success');
		$this->flash_message->set('yeyyy!','error');
		
		$this->_addData(array(
			'bryant' => true
			,'view' => 'test'
		));
		
		$this->_loadView();
	}
	
}