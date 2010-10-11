<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Error{
	
	var $is_error 					= false;
	var $is_fatal					= false;
	var $error_list 				= array();
	var $fatal_list					= array();
	var $priority_list				= array();
	
	
	function __construct(){	
		$this->CI =& get_instance();
	}
	
	function set($msg, $is_fatal = false, $is_priority = false){
		
		$this->is_error = true;
		
		$errorArr = array('msg'=>$msg, 'is_fatal'=>$is_fatal, 'is_priority'=>$is_priority);
		
		if($is_fatal){
			
			$this->is_fatal = true;
			$this->fatal_list[] = $errorArr;
		
		}else if($is_priority && !$is_fatal){
			
			$this->priority_list[] = $errorArr;
		
		}else{
			
			$this->error_list[] = $errorArr;
		
		}	
	}
	
	function get(){
		
		$this->set_error_list();
		
		if(count($this->error_list)){
			return $this->error_list[0];
		}else{
			return false;
		}
	}
	
	function set_error_list(){
		
		$this->error_list = array_merge($this->priority_list, $this->error_list);
		
		if($this->is_fatal){
			$this->error_list = array_merge($this->fatal_list, $this->error_list);
		}
	}
	
	/*
	*	This function will be used when we need to redirect the user to a new page and also set an error that will flash when the new page loads
	*	@param1 - $msg - the message that you want displayed
	*	@param2 - $uri - the uri that you want to redirect to go to 
	*/
	function error_redirect($msg = 'You have been redirected', $uri){
		
		$tempError = array('is_error'=>1, 'msg'=>$msg);
		$this->session->set_flashdata('error', $tempError);
		redirect($uri, 'location');	
	}
	
	/*
	*	This function will be used when we need to redirect the user to a new page and also set a success message that will flash when the new page loads
	*	@param1 - $msg - the message that you want displayed
	*	@param2 - $uri - the uri that you want to redirect to go to 
	*/
	function success_redirect($msg = 'Success!', $uri){
		
		$tempError = array('is_success'=>1, 'msg'=>$msg);
		$this->session->set_flashdata('success', $tempSuccess);
		redirect($uri, 'location');	
	}
}
	
	