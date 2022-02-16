<?php
/*! INFINITUM Validation CI PHP v1.0.0.1 (http://www.infinitum.lk/developer) | Copyright (c) 2018 INFINITUM | Licensed under the MIT license */
class ModelValidation extends CI_Model {
	
	public function __construct() {
    	parent::__construct();      
    }	
	
	public $rules = array(
		"email" => '/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w+)+$/',
		'12h-time' => '/^([0-9]|0[0-9]|1[0-9]|2[0-3]):([0-5][0-9])\s*([AaPp][Mm])$/',
		'gmap-embed' => '/^(?:https:\/\/www\.google\.com\/maps\/embed\?pb=)[\W\w]+$/',
		'alpha-numeric' => '/^[#\.0-9a-zA-Z\s,-:\\&]+$/',
		'alpha-numeric-unicode' => '/^[#\.0-9\pL\s,-:\\&]+$/',
		'password' => '/^[#\.0-9a-zA-Z\s,-:]{5,60}$/',
		'check' => '/^[true|false]+$/',
		'base64-image' => '/^(?:data:image\/[png|jpg|jpeg]+;base64,)(?:[\W\w]+)$/',
		'link' => '/^(?:http(s)?:\/\/)?[\w.-]+(?:\.[\w\.-]+)+[\w\-\._~:\/?#[\]@!\$&\'\(\)\*\+,;=.]+$/',
		'date' => '/^(?:(?:31(\/|-|\.)(?:0?[13578]|1[02]))\1|(?:(?:29|30)(\/|-|\.)(?:0?[1,3-9]|1[0-2])\2))(?:(?:1[6-9]|[2-9]\d)?\d{2})$|^(?:29(\/|-|\.)0?2\3(?:(?:(?:1[6-9]|[2-9]\d)?(?:0[48]|[2468][048]|[13579][26])|(?:(?:16|[2468][048]|[3579][26])00))))$|^(?:0?[1-9]|1\d|2[0-8])(\/|-|\.)(?:(?:0?[1-9])|(?:1[0-2]))\4(?:(?:1[6-9]|[2-9]\d)?\d{2})$/' /* dd/mm/yyyy | dd-mm-yyyy | dd.mm.yyyy */
	);
	
	public function validate_dob($dob) {			
		$today = date("d-m-Y");//today's date

		$user_dob = new DateTime($dob);
		$today = new DateTime($today);

		$interval = $user_dob->diff($today);

		$age = $interval->y; 
		
		if ($user_dob > $today) {
			$this->form_validation->set_message('validate_dob', "You cannot be from the future!");	
			return false;
		}

		if ($age > 90){ 
			$this->form_validation->set_message('validate_dob', "You cannot be this old!");	
			return false;
		}
		
		return true;
	}
	
	public function set_rule($field_name, $field_desc, $rule, $callback = NULL) {
		$_rules = array("required", "trim", "regex_match[$rule]");
		
		if ($callback !== NULL) {
			$callback = array($callback[1], $callback);
			array_push($_rules, $callback);
		}
		
		$this->form_validation->set_rules(
			$field_name, $field_desc, $_rules
		);
		
		$data = $this->input->post($field_name);
		$data = $this->security->xss_clean($data);
		
		return $data;
	}
}