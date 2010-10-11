<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Flash_message{
	
	var $active 			= false;
	var $list				= array();
	
	
	function __construct(){
			
	}
	
	function init(){
		
		//get uri array and search for flash_message
        if($data = $this->session->flashdata('flash_message')){
        
        	$this->set($data['msg'], $data['type']);   	
   		}
   		
   		return true;
	}
	
	/*
	*	This function will be used when we need to redirect the user to a new page and also set an alert that tells them they were redirected
	*	@param1 - $msg - the message that you want displayed
	*	@param2 - $uri - the uri that you want to redirect to go to 
	*/
	function redirect($msg = 'You have been redirected', $uri){
		
		$msgArr = array('type'=> 'error', 'msg'=>$msg);
		$this->session->set_flashdata('flash_message', $msgArr);
		redirect($uri, 'location');	
	}
	
	/*
	*	This function will be used to add a flash_message to the list of messages
	*	@param1 - $msg - the message that you want displayed
	*	@param2 - $type - the type of message: error, success, info
	*/
	function set($msg = 'You have been redirected', $type = 'info'){
		
		$this->active = true;
		$this->list[] = array('type'=>$type, 'msg'=>$msg);
		
		return true;
	}
	
	function get_list(){
		
		return $this->list;
		
	}	
}