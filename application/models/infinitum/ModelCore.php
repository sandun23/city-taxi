<?php
/*! INFINITUM Core CI PHP v1.0.0.1 (http://www.infinitum.lk/developer) | Copyright (c) 2018 INFINITUM | Licensed under the MIT license */
class ModelCore extends CI_Model {
	
	/* Assets */
	private $base_url = "";	
	private $assets = array();
	
	public function getAssets() {
		return $this->assets;
	}
	/* /Assets */
	
	public function __construct() {
    	parent::__construct();      
		
		$this->base_url = base_url();
		
		$this->assets = array(
			"css" => $this->base_url."core/assets/css/",
			"js" => $this->base_url."core/assets/js/",
			"img" => $this->base_url."core/assets/img/",
			"plugins" => $this->base_url."core/assets/plugins/"
		);
    }	
	
	/* Network Connectivity - Start */
	public $status_codes = array(
		200 => "Request Successful",
		400 => "Bad Request",
		401 => "Unauthorized Invalid Credentials",
		405 => "Method Not Allowed",
		406 => "Not Acceptable",
		404 => "Not Found",
		500 => "Internal Server Error"
	);
	
	public function isAjaxRequest() {
		if ($this->input->is_ajax_request()) {
			return true;
		}
		return false;
	}
	
	public function checkForPost() {
		if($this->input->method() == "post") {
			if ($this->input->post()) {
				return true;
			}
		}
		
		return false;
	}	
	
	public function sendHTMLEmal($from, $to, $subject, $view, $data = array()) {
		$this->load->library('email', array(
			'mailtype' => 'html',
			'charset' => 'utf-8',
			'priority' => '1'
		));
		$this->email->set_newline("\r\n");
		
		$this->email->from($from, "KCJ Classics");
		$this->email->to($to);
		$this->email->subject($subject);
		
		$message = $this->load->view($view, $data, true);
		
		$this->email->message($message);
		
		return $this->email->send();
	}
	
	public function check_for_put() {
		if($this->input->method() == "put") {			
			parse_str(file_get_contents("php://input"), $post_vars);			
			$put_array = array();
			
			foreach ($post_vars as $key => $value) { 
				$_POST[$key] = $value; 
				$put_array[$key] = $value;
			}
			$this->form_validation->set_data($put_array);
			
			return true;
		}						
		
		return false;
	}
	
	public function check_for_delete() {
		if($this->input->method() == "delete") {			
			parse_str(file_get_contents("php://input"), $post_vars);			
			$put_array = array();
			
			foreach ($post_vars as $key => $value) { 
				$_POST[$key] = $value; 
				$put_array[$key] = $value;
			}
			$this->form_validation->set_data($put_array);
			
			return true;
		}								
		
		return false;
	}
	
	public function getClientIP() {
		$ipaddress = $this->input->ip_address();
		
		/*if (getenv('HTTP_CLIENT_IP'))
			$ipaddress = getenv('HTTP_CLIENT_IP');
		else if(getenv('HTTP_X_FORWARDED_FOR'))
			$ipaddress = getenv('HTTP_X_FORWARDED_FOR');
		else if(getenv('HTTP_X_FORWARDED'))
			$ipaddress = getenv('HTTP_X_FORWARDED');
		else if(getenv('HTTP_FORWARDED_FOR'))
			$ipaddress = getenv('HTTP_FORWARDED_FOR');
		else if(getenv('HTTP_FORWARDED'))
			$ipaddress = getenv('HTTP_FORWARDED');
		else if(getenv('REMOTE_ADDR'))
			$ipaddress = getenv('REMOTE_ADDR');
		else
			$ipaddress = '0.0.0.0';
		*/
	 
		return $ipaddress;
	}
	
	public function getClientIPData($ip_address) {
		$details = null;
		try {			
			$details = json_decode(file_get_contents("http://ipinfo.io/{$ip_address}"));	
		} catch(Exception $e) {
			return null;
		}
		
		return $details;
	}
	/* Network Connectivity - End */
	
	/* Country List - Start */
	public function getCountryList() {
		return [
			[
				"name" => "Afghanistan", 
				"code" => "AF" 
			], 
			[
				"name" => "Land Islands", 
				"code" => "AX" 
			], 
			[
				"name" => "Albania", 
				"code" => "AL" 
			], 
			[
				"name" => "Algeria", 
				"code" => "DZ" 
			], 
			[
				"name" => "American Samoa", 
				"code" => "AS" 
			], 
			[
				"name" => "AndorrA", 
				"code" => "AD" 
			], 
			[
				"name" => "Angola", 
				"code" => "AO" 
			], 
			[
				"name" => "Anguilla", 
				"code" => "AI" 
			], 
			[
				"name" => "Antarctica", 
				"code" => "AQ" 
			], 
			[
				"name" => "Antigua and Barbuda", 
				"code" => "AG" 
			], 
			[
				"name" => "Argentina", 
				"code" => "AR" 
			], 
			[
				"name" => "Armenia", 
				"code" => "AM" 
			], 
			[
				"name" => "Aruba", 
				"code" => "AW" 
			], 
			[
				"name" => "Australia", 
				"code" => "AU" 
			], 
			[
				"name" => "Austria", 
				"code" => "AT" 
			], 
			[
				"name" => "Azerbaijan", 
				"code" => "AZ" 
			], 
			[
				"name" => "Bahamas", 
				"code" => "BS" 
			], 
			[
				"name" => "Bahrain", 
				"code" => "BH" 
			], 
			[
				"name" => "Bangladesh", 
				"code" => "BD" 
			], 
			[
				"name" => "Barbados", 
				"code" => "BB" 
			], 
			[
				"name" => "Belarus", 
				"code" => "BY" 
			], 
			[
				"name" => "Belgium", 
				"code" => "BE" 
			], 
			[
				"name" => "Belize", 
				"code" => "BZ" 
			], 
			[
				"name" => "Benin", 
				"code" => "BJ" 
			], 
			[
				"name" => "Bermuda", 
				"code" => "BM" 
			], 
			[
				"name" => "Bhutan", 
				"code" => "BT" 
			], 
			[
				"name" => "Bolivia", 
				"code" => "BO" 
			], 
			[
				"name" => "Bosnia and Herzegovina", 
				"code" => "BA" 
			], 
			[
				"name" => "Botswana", 
				"code" => "BW" 
			], 
			[
				"name" => "Bouvet Island", 
				"code" => "BV" 
			], 
			[
				"name" => "Brazil", 
				"code" => "BR" 
			], 
			[
				"name" => "British Indian Ocean Territory", 
				"code" => "IO" 
			], 
			[
				"name" => "Brunei Darussalam", 
				"code" => "BN" 
			], 
			[
				"name" => "Bulgaria", 
				"code" => "BG" 
			], 
			[
				"name" => "Burkina Faso", 
				"code" => "BF" 
			], 
			[
				"name" => "Burundi", 
				"code" => "BI" 
			], 
			[
				"name" => "Cambodia", 
				"code" => "KH" 
			], 
			[
				"name" => "Cameroon", 
				"code" => "CM" 
			], 
			[
				"name" => "Canada", 
				"code" => "CA" 
			], 
			[
				"name" => "Cape Verde", 
				"code" => "CV" 
			], 
			[
				"name" => "Cayman Islands", 
				"code" => "KY" 
			], 
			[
				"name" => "Central African Republic", 
				"code" => "CF" 
			], 
			[
				"name" => "Chad", 
				"code" => "TD" 
			], 
			[
				"name" => "Chile", 
				"code" => "CL" 
			], 
			[
				"name" => "China", 
				"code" => "CN" 
			], 
			[
				"name" => "Christmas Island", 
				"code" => "CX" 
			], 
			[
				"name" => "Cocos (Keeling) Islands", 
				"code" => "CC" 
			], 
			[
				"name" => "Colombia", 
				"code" => "CO" 
			], 
			[
				"name" => "Comoros", 
				"code" => "KM" 
			], 
			[
				"name" => "Congo", 
				"code" => "CG" 
			], 
			[
				"name" => "Congo, The Democratic Republic of the", 
				"code" => "CD" 
			], 
			[
				"name" => "Cook Islands", 
				"code" => "CK" 
			], 
			[
				"name" => "Costa Rica", 
				"code" => "CR" 
			], 
			[
				"name" => "Cote D'Ivoire", 
				"code" => "CI" 
			], 
			[
				"name" => "Croatia", 
				"code" => "HR" 
			], 
			[
				"name" => "Cuba", 
				"code" => "CU" 
			], 
			[
				"name" => "Cyprus", 
				"code" => "CY" 
			], 
			[
				"name" => "Czech Republic", 
				"code" => "CZ" 
			], 
			[
				"name" => "Denmark", 
				"code" => "DK" 
			], 
			[
				"name" => "Djibouti", 
				"code" => "DJ" 
			], 
			[
				"name" => "Dominica", 
				"code" => "DM" 
			], 
			[
				"name" => "Dominican Republic", 
				"code" => "DO" 
			], 
			[
				"name" => "Ecuador", 
				"code" => "EC" 
			], 
			[
				"name" => "Egypt", 
				"code" => "EG" 
			], 
			[
				"name" => "El Salvador", 
				"code" => "SV" 
			], 
			[
				"name" => "Equatorial Guinea", 
				"code" => "GQ" 
			], 
			[
				"name" => "Eritrea", 
				"code" => "ER" 
			], 
			[
				"name" => "Estonia", 
				"code" => "EE" 
			], 
			[
				"name" => "Ethiopia", 
				"code" => "ET" 
			], 
			[
				"name" => "Falkland Islands (Malvinas)", 
				"code" => "FK" 
			], 
			[
				"name" => "Faroe Islands", 
				"code" => "FO" 
			], 
			[
				"name" => "Fiji", 
				"code" => "FJ" 
			], 
			[
				"name" => "Finland", 
				"code" => "FI" 
			], 
			[
				"name" => "France", 
				"code" => "FR" 
			], 
			[
				"name" => "French Guiana", 
				"code" => "GF" 
			], 
			[
				"name" => "French Polynesia", 
				"code" => "PF" 
			], 
			[
				"name" => "French Southern Territories", 
				"code" => "TF" 
			], 
			[
				"name" => "Gabon", 
				"code" => "GA" 
			], 
			[
				"name" => "Gambia", 
				"code" => "GM" 
			], 
			[
				"name" => "Georgia", 
				"code" => "GE" 
			], 
			[
				"name" => "Germany", 
				"code" => "DE" 
			], 
			[
				"name" => "Ghana", 
				"code" => "GH" 
			], 
			[
				"name" => "Gibraltar", 
				"code" => "GI" 
			], 
			[
				"name" => "Greece", 
				"code" => "GR" 
			], 
			[
				"name" => "Greenland", 
				"code" => "GL" 
			], 
			[
				"name" => "Grenada", 
				"code" => "GD" 
			], 
			[
				"name" => "Guadeloupe", 
				"code" => "GP" 
			], 
			[
			  "name" => "Guam", 
			  "code" => "GU" 
			], 
			[
				"name" => "Guatemala", 
				"code" => "GT" 
			], 
			[
				"name" => "Guernsey", 
				"code" => "GG" 
			], 
			[
				"name" => "Guinea", 
				"code" => "GN" 
			], 
			[
				"name" => "Guinea-Bissau", 
				"code" => "GW" 
			], 
			[
				"name" => "Guyana", 
				"code" => "GY" 
			], 
			[
				"name" => "Haiti", 
				"code" => "HT" 
			], 
			[
				"name" => "Heard Island and Mcdonald Islands", 
				"code" => "HM" 
			], 
			[
				"name" => "Holy See (Vatican City State)", 
				"code" => "VA" 
			], 
			[
				"name" => "Honduras", 
				"code" => "HN" 
			], 
			[
				"name" => "Hong Kong", 
				"code" => "HK" 
			], 
			[
				"name" => "Hungary", 
				"code" => "HU" 
			], 
			[
				"name" => "Iceland", 
				"code" => "IS" 
			], 
			[
				"name" => "India", 
				"code" => "IN" 
			], 
			[
				"name" => "Indonesia", 
				"code" => "ID" 
			], 
			[
				"name" => "Iran, Islamic Republic Of", 
				"code" => "IR" 
			], 
			[
				"name" => "Iraq", 
				"code" => "IQ" 
			], 
			[
				"name" => "Ireland", 
				"code" => "IE" 
			], 
			[
				"name" => "Isle of Man", 
				"code" => "IM" 
			], 
			[
				"name" => "Israel", 
				"code" => "IL" 
			], 
			[
				"name" => "Italy", 
				"code" => "IT" 
			], 
			[
				"name" => "Jamaica", 
				"code" => "JM" 
			], 
			[
				"name" => "Japan", 
				"code" => "JP" 
			], 
			[
				"name" => "Jersey", 
				"code" => "JE" 
			], 
			[
				"name" => "Jordan", 
				"code" => "JO" 
			], 
			[
				"name" => "Kazakhstan", 
				"code" => "KZ" 
			], 
			[
				"name" => "Kenya", 
				"code" => "KE" 
			], 
			[
				"name" => "Kiribati", 
				"code" => "KI" 
			], 
			[
				"name" => "Korea, Democratic People\'S Republic of", 
				"code" => "KP" 
			], 
			[
				"name" => "Korea, Republic of", 
				"code" => "KR" 
			], 
			[
				"name" => "Kuwait", 
				"code" => "KW" 
			], 
			[
				"name" => "Kyrgyzstan", 
				"code" => "KG" 
			], 
			[
				"name" => "Lao People\'S Democratic Republic", 
				"code" => "LA" 
			], 
			[
				"name" => "Latvia", 
				"code" => "LV" 
			], 
			[
				"name" => "Lebanon", 
				"code" => "LB" 
			], 
			[
				"name" => "Lesotho", 
				"code" => "LS" 
			], 
			[
				"name" => "Liberia", 
				"code" => "LR" 
			], 
			[
				"name" => "Libyan Arab Jamahiriya", 
				"code" => "LY" 
			], 
			[
				"name" => "Liechtenstein", 
				"code" => "LI" 
			], 
			[
				"name" => "Lithuania", 
				"code" => "LT" 
			], 
			[
				"name" => "Luxembourg", 
				"code" => "LU" 
			], 
			[
				"name" => "Macao", 
				"code" => "MO" 
			], 
			[
				"name" => "Macedonia, The Former Yugoslav Republic of", 
				"code" => "MK" 
			], 
			[
				"name" => "Madagascar", 
				"code" => "MG" 
			], 
			[
				"name" => "Malawi", 
				"code" => "MW" 
			], 
			[
				"name" => "Malaysia", 
				"code" => "MY" 
			], 
			[
				"name" => "Maldives", 
				"code" => "MV" 
			], 
			[
				"name" => "Mali", 
				"code" => "ML" 
			], 
			[
				"name" => "Malta", 
				"code" => "MT" 
			], 
			[
				"name" => "Marshall Islands", 
				"code" => "MH" 
			], 
			[
				"name" => "Martinique", 
				"code" => "MQ" 
			], 
			[
				"name" => "Mauritania", 
				"code" => "MR" 
			], 
			[
				"name" => "Mauritius", 
				"code" => "MU" 
			], 
			[
				"name" => "Mayotte", 
				"code" => "YT" 
			], 
			[
				"name" => "Mexico", 
				"code" => "MX" 
			], 
			[
				"name" => "Micronesia, Federated States of", 
				"code" => "FM" 
			], 
			[
				"name" => "Moldova, Republic of", 
				"code" => "MD" 
			], 
			[
				"name" => "Monaco", 
				"code" => "MC" 
			], 
			[
				"name" => "Mongolia", 
				"code" => "MN" 
			], 
			[
				"name" => "Montenegro", 
				"code" => "ME" 
			], 
			[
				"name" => "Montserrat", 
				"code" => "MS" 
			], 
			[
				"name" => "Morocco", 
				"code" => "MA" 
			], 
			[
				"name" => "Mozambique", 
				"code" => "MZ" 
			], 
			[
				"name" => "Myanmar", 
				"code" => "MM" 
			], 
			[
				"name" => "Namibia", 
				"code" => "NA" 
			], 
			[
				"name" => "Nauru", 
				"code" => "NR" 
			], 
			[
				"name" => "Nepal", 
				"code" => "NP" 
			], 
			[
				"name" => "Netherlands", 
				"code" => "NL" 
			], 
			[
				"name" => "Netherlands Antilles", 
				"code" => "AN" 
			], 
			[
				"name" => "New Caledonia", 
				"code" => "NC" 
			], 
			[
				"name" => "New Zealand", 
				"code" => "NZ" 
			], 
			[
				"name" => "Nicaragua", 
				"code" => "NI" 
			], 
			[
				"name" => "Niger", 
				"code" => "NE" 
			], 
			[
				"name" => "Nigeria", 
				"code" => "NG" 
			], 
			[
				"name" => "Niue", 
				"code" => "NU" 
			], 
			[
				"name" => "Norfolk Island", 
				"code" => "NF" 
			], 
			[
				"name" => "Northern Mariana Islands", 
				"code" => "MP" 
			], 
			[
				"name" => "Norway", 
				"code" => "NO" 
			], 
			[
				"name" => "Oman", 
				"code" => "OM" 
			], 
			[
				"name" => "Pakistan", 
				"code" => "PK" 
			], 
			[
				"name" => "Palau", 
				"code" => "PW" 
			], 
			[
				"name" => "Palestinian Territory, Occupied", 
				"code" => "PS" 
			], 
			[
				"name" => "Panama", 
				"code" => "PA" 
			], 
			[
				"name" => "Papua New Guinea", 
				"code" => "PG" 
			], 
			[
				"name" => "Paraguay", 
				"code" => "PY" 
			], 
			[
				"name" => "Peru", 
				"code" => "PE" 
			], 
			[
				"name" => "Philippines", 
				"code" => "PH" 
			], 
			[
				"name" => "Pitcairn", 
				"code" => "PN" 
			], 
			[
				"name" => "Poland", 
				"code" => "PL" 
			], 
			[
				"name" => "Portugal", 
				"code" => "PT" 
			], 
			[
				"name" => "Puerto Rico", 
				"code" => "PR" 
			], 
			[
				"name" => "Qatar", 
				"code" => "QA" 
			], 
			[
				"name" => "Reunion", 
				"code" => "RE" 
			], 
			[
				"name" => "Romania", 
				"code" => "RO" 
			], 
			[
				"name" => "Russian Federation", 
				"code" => "RU" 
			], 
			[
				"name" => "RWANDA", 
				"code" => "RW" 
			], 
			[
				"name" => "Saint Helena", 
				"code" => "SH" 
			], 
			[
				"name" => "Saint Kitts and Nevis", 
				"code" => "KN" 
			], 
			[
				"name" => "Saint Lucia", 
				"code" => "LC" 
			], 
			[
				"name" => "Saint Pierre and Miquelon", 
				"code" => "PM" 
			], 
			[
				"name" => "Saint Vincent and the Grenadines", 
				"code" => "VC" 
			], 
			[
				"name" => "Samoa", 
				"code" => "WS" 
			], 
			[
				"name" => "San Marino", 
				"code" => "SM" 
			], 
			[
				"name" => "Sao Tome and Principe", 
				"code" => "ST" 
			], 
			[
				"name" => "Saudi Arabia", 
				"code" => "SA" 
			], 
			[
				"name" => "Senegal", 
				"code" => "SN" 
			], 
			[
				"name" => "Serbia", 
				"code" => "RS" 
			], 
			[
				"name" => "Seychelles", 
				"code" => "SC" 
			], 
			[
				"name" => "Sierra Leone", 
				"code" => "SL" 
			], 
			[
				"name" => "Singapore", 
				"code" => "SG" 
			], 
			[
				"name" => "Slovakia", 
				"code" => "SK" 
			], 
			[
				"name" => "Slovenia", 
				"code" => "SI" 
			], 
			[
				"name" => "Solomon Islands", 
				"code" => "SB" 
			], 
			[
				"name" => "Somalia", 
				"code" => "SO" 
			], 
			[
				"name" => "South Africa", 
				"code" => "ZA" 
			], 
			[
				"name" => "South Georgia and the South Sandwich Islands", 
				"code" => "GS" 
			], 
			[
				"name" => "Spain", 
				"code" => "ES" 
			], 
			[
				"name" => "Sri Lanka", 
				"code" => "LK" 
			], 
			[
				"name" => "Sudan", 
				"code" => "SD" 
			], 
			[
				"name" => "Suriname", 
				"code" => "SR" 
			], 
			[
				"name" => "Svalbard and Jan Mayen", 
				"code" => "SJ" 
			], 
			[
				"name" => "Swaziland", 
				"code" => "SZ" 
			], 
			[
				"name" => "Sweden", 
				"code" => "SE" 
			], 
			[
				"name" => "Switzerland", 
				"code" => "CH" 
			], 
			[
				"name" => "Syrian Arab Republic", 
				"code" => "SY" 
			], 
			[
				"name" => "Taiwan, Province of China", 
				"code" => "TW" 
			], 
			[
				"name" => "Tajikistan", 
				"code" => "TJ" 
			], 
			[
				"name" => "Tanzania, United Republic of", 
				"code" => "TZ" 
			], 
			[
				"name" => "Thailand", 
				"code" => "TH" 
			], 
			[
				"name" => "Timor-Leste", 
				"code" => "TL" 
			], 
			[
				"name" => "Togo", 
				"code" => "TG" 
			], 
			[
				"name" => "Tokelau", 
				"code" => "TK" 
			], 
			[
				"name" => "Tonga", 
				"code" => "TO" 
			], 
			[
				"name" => "Trinidad and Tobago", 
				"code" => "TT" 
			], 
			[
				"name" => "Tunisia", 
				"code" => "TN" 
			], 
			[
				"name" => "Turkey", 
				"code" => "TR" 
			], 
			[
				"name" => "Turkmenistan", 
				"code" => "TM" 
			], 
			[
				"name" => "Turks and Caicos Islands", 
				"code" => "TC" 
			], 
			[
				"name" => "Tuvalu", 
				"code" => "TV" 
			], 
			[
				"name" => "Uganda", 
				"code" => "UG" 
			], 
			[
				"name" => "Ukraine", 
				"code" => "UA" 
			], 
			[
				"name" => "United Arab Emirates", 
				"code" => "AE" 
			], 
			[
				"name" => "United Kingdom", 
				"code" => "GB" 
			], 
			[
				"name" => "United States", 
				"code" => "US" 
			], 
			[
				"name" => "United States Minor Outlying Islands", 
				"code" => "UM" 
			], 
			[
				"name" => "Uruguay", 
				"code" => "UY" 
			], 
			[
				"name" => "Uzbekistan", 
				"code" => "UZ" 
			], 
			[
				"name" => "Vanuatu", 
				"code" => "VU" 
			], 
			[
				"name" => "Venezuela", 
				"code" => "VE" 
			], 
			[
				"name" => "Viet Nam", 
				"code" => "VN" 
			], 
			[
				"name" => "Virgin Islands, British", 
				"code" => "VG" 
			], 
			[
				"name" => "Virgin Islands, U.S.", 
				"code" => "VI" 
			], 
			[
				"name" => "Wallis and Futuna", 
				"code" => "WF" 
			], 
			[
				"name" => "Western Sahara", 
				"code" => "EH" 
			], 
			[
				"name" => "Yemen", 
				"code" => "YE" 
			], 
			[
				"name" => "Zambia", 
				"code" => "ZM" 
			], 
			[
				"name" => "Zimbabwe", 
				"code" => "ZW" 
			] 
		];
	}
	/* Country List - End */
	
	public function jsonResponse($status, $response_code, $message = "", $data = null) {
        http_response_code($response_code);
		header("Content-Type: text/json;"); 
        $response = array(
            "status" => $status,
			"response_code" => $response_code,
            "message" => $message == "" ? $this->status_codes[$response_code] : $message
        );
        if ($data != null) {
            $response["data"] = $data;
        }
		
		$this->load->view('json_out', array(
			"output" => json_encode($response)
		));        
    }
	
	/* Encryption - Start */
	public function hash_password($password, $salt = false) {
		if (!empty($salt)) $password = $salt . implode($salt, str_split($password, floor(strlen($password)/2))) . $salt;
		return md5( $password );
	}
	/* Encryption - Start */
	
	/* String Manipulation - Start */
	public function generate_string($count = 32) {
        $alpha = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789_";
        $data = "";
        for ($i=0;$i<$count;$i++) {
            $data = $data.$alpha[rand(0,strlen($alpha)-1)];
        }
		
        return $data;
	}
	
	public function generate_uf_string($count = 6) {/* User Friendly String */
        $alpha = "ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
        $data = "";
        for ($i=0;$i<$count;$i++) {
            $data = $data.$alpha[rand(0,strlen($alpha)-1)];
        }
		
        return $data;
	}
	/* String Manipulation - End */
	
	/* Image Manipulation - Start */
	public function base64_to_image($data, $file_location, $with_type = true) {
		$status = array(
			'status' => false,
			'msg' => 'conversion failed'
		);
		
		if (preg_match('/^data:image\/(\w+);base64,/', $data, $type)) {
			$data = substr($data, strpos($data, ',') + 1);
			$type = strtolower($type[1]);
			
			if (!in_array($type, ['jpg', 'jpeg', 'gif', 'png'])) {
				$status['status'] = false;
				$status['msg'] = 'invalid image type';
			}

			$data = base64_decode($data);

			if ($data === false) {
				$status['status'] = false;
				$status['msg'] = 'base64_decode failed';
			}
		} else {
			$status['status'] = false;
			$status['msg'] = 'did not match data URI with image data';
		}

		$file_location = $with_type ? $file_location.'.'.$type :  $file_location.'.jpeg';
		$status = file_put_contents($file_location, $data);
		if (!$status) {
			$status['status'] = false;
			$status['msg'] = 'Failed to save Image';
		}

		return array(
			'status' => true,
			'type' => $type
		);
	}
}