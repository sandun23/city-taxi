<?php
class ModelJWT extends CI_Model {
	
	private $yathura = "GM8N2W7JhYnL44Hz9wyCKnGdwdKAgNKc8CyzSQtVQFSsSuHjRafUghDjDUjwqqA6WPW5qWRFTCkTLnfkCKDex2qgDba4BGzPabJv5aUmGPm87RAgzm8S8gEH4bPLKa8VKffsF4LkqVQNK2w8TfhCPgmxdEZptRPQmUeGXJfPSxB8ecDMHaFJM76RWDKJ6amuAmjNXU2WH7JzhB6nu6sREwswTdTGrzQHpUck3rPJfuD2E4NR";
	
	private $token_issuer = "sandbox.infinitum.lk/kcjclassics";

	public function __construct() {
    	parent::__construct();	
		$this->load->model("infinitum/ModelCore");
		$this->load->library('JWT');
    }
	
	public function encode_token($payload, $expire_time = -1) {
		$_payload = array(
			"iss" => $this->token_issuer,
			"iat" => strtotime("now"),			
			$payload
		);
		
		if ($expire_time != -1) {
			$_payload["exp"] = strtotime('+1 weeks');
		}
		
		return JWT::encode($_payload, $this->yathura);
	}
	
	public function decode_token($token) {		
		return JWT::decode($token, $this->yathura);
	}
}