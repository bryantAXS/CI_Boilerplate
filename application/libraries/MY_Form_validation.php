<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * MY_Form_validation Class
 *
 * Extends Form_Validation library
 *
 * Allows for custom error messages to be added to the error array
 *
 * Note that this update should be used with the
 * form_validation library introduced in CI 1.7.0
 */
class MY_Form_validation extends CI_Form_validation {

    function My_Form_validation($config = '')
    {
        parent::CI_Form_validation($config);
    }

    // --------------------------------------------------------------------

    /**
     * Set Error
     *
     * @access  public
     * @param   string
     * @return  bool
    */  
    function set_error($error = ''){
        if (empty($error)){
            return FALSE;
        }
        else{
            $CI =& get_instance();
            $CI->form_validation->_error_array['custom_error'] = $error;

            return TRUE;
        }
    }
    
    /**
     * Get Form Data
     *
     *  This function is used to validate and aggregate form POST Data.
     *  The $fields param can eithor be an array of strings, with each representing a required field - or an array with to keys 'required' and 'notRequired' each of which are arrays of strings with respective element names.  
     *
    */ 
    function getFormData($fields){
    	
    	$CI =& get_instance();
    	
    	//used to store required and notRequired arrays (if passed)
    	$requiredArr = null;
    	$notRequiredArr = null;
    	
    	//check to see if $fields var is a standard array of strings - or, if it an associative array with required and notrequired fields.
    	if(isset($fields['required'])){
    		$requiredArr = $fields['required'];
    		$notRequiredArr = $fields['notRequired'];
    		$fields = array_merge($requiredArr, $notRequiredArr);
    	}
    	
    	//this array will hold all various data returned from this method
		$formData = array();
		$formData['valid'] = true;
		$formData['fields'] = array();
		$formData['notValid'] = array();
		
		for($a = 0; $a < count($fields); $a++){
			$field = $fields[$a];
			
			//if a value is suppled for the field
			if($CI->input->post($field, TRUE) !== false){
				$value = $CI->input->post($field);
				
				//if the value is empty
				if($this->_empty($value)){
					
					//if required array is not null and field is in required array OR required field is null (not being used, everything is required)
					if(isset($requiredArr)){
						if(in_array($field, $requiredArr)){
							$formData['valid'] = false;
							$formData['notValid'][] = $field;
						}
					}else{
						$formData['valid'] = false;
						$formData['notValid'][] = $field;
					}
				}else{
					//valid piece of data
					$formData['fields'][$field] = $value;
				}
			}else{
				//if required array is not null and field is in required array OR required field is null (not being used, everything is required)
				if(($requiredArr && in_array($field, $requiredArr)) || !$requiredArr){
					$formData['valid'] = false;
					$formData['notValid'][] = $field;
				}
			}
		}
		return $formData;
    }
    
    //same as regular empty(), but "0" is considered NOT empty
    function _empty($string){ 
     	$string = trim($string); 
     	if(!is_numeric($string)) return empty($string); 
     	return FALSE; 
	}
	
	function valid_url($str)
	{
	    return ( ! preg_match('/^(http|https|ftp):\/\/([A-Z0-9][A-Z0-9_-]*(?:\.[A-Z0-9][A-Z0-9_-]*)+):?(\d+)?\/?/i', $str)) ? FALSE : TRUE;
	} 

}
