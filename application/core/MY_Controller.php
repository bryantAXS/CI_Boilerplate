<?php (defined('BASEPATH')) OR exit('No direct script access allowed');

require APPPATH."third_party/MX/Controller.php";

/**
 * MY_Controller Class
 */
class MY_Controller extends MX_Controller {

	var $data = array();
    
    function __construct(){
        parent::__construct();
        
        $this->load->library('flash_message');
        
    }
    
    /*
    *	Allows you to add data to the global data array.
    *	@param1: eithor an array containing key/value pairs of data to add, OR the key corresponding to $param2
    *	@param2: (optional) this is the value corresponding to the key of $param1, if $param1 it is not an array of values
    */
    function _addData($param1, $param2 = null){
    	
    	//if $param1 is an array loop through it and add all values to their respect key in the dataArr
    	if(is_array($param1)){
    		
    		foreach($param1 as $key => $value){
    			$this->data[$key] = $value;
    		}
    	}else{
    		$this->data[$param1] = $param2;
    	}
    }
    
    /*
	*	This function handles the calling of the master view.  It gets called from each pages respective controller.  It first checks
	*	to see that there are no errors on the page, and then loads the master view.  If there are errors it loads the error view.
	*/
	function _loadView(){
				
		//assumes error lib is being auto-loaded
		$this->data['error'] = $this->error->get();
		
		if($this->flash_message->active){
			$this->data['flash_message'] = $this->flash_message->get_list();
		}
		
		$this->firephp->log($this->data);
		$this->load->vars($this->data);
		$this->load->view('view_master');	
	}
}
