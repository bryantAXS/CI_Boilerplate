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
	
	function set_error($msg, $is_fatal = false, $is_priority = false){
		
		$this->is_error = true;
		
		$errorArr = array('msg'=>$msg);
		
		if($is_fatal){
			
			$this->is_fatal = true;
			$this->fatal_list[] = $array
		
		}else if($is_priority && !$is_fatal){
			
			$this->priority_list[] = $errorArr;
		
		}else{
			
			$this->error_list[] = $errorArr;
		
		}	
	}
	
	function get_error(){
		
		
		
	}
	
	/*
	*	This function will be used when we need to redirect the user to a new page and also set an error that will flash when the new page loads
	*	@param1 - $msg - the message that you want displayed
	*	@param2 - $uri - the uri that you want to redirect to go to 
	*/
	function _error_redirect($msg = 'You have been redirected', $uri){
		
		$tempError = array('is_error'=>1, 'msg'=>$msg);
		$this->session->set_flashdata('error', $tempError);
		redirect($uri, 'location');	
	}
	
	/*
	*	This function will be used when we need to redirect the user to a new page and also set a success message that will flash when the new page loads
	*	@param1 - $msg - the message that you want displayed
	*	@param2 - $uri - the uri that you want to redirect to go to 
	*/
	function _success_redirect($msg = 'Success!', $uri){
		
		$tempError = array('is_success'=>1, 'msg'=>$msg);
		$this->session->set_flashdata('success', $tempSuccess);
		redirect($uri, 'location');	
	}
}
	
	