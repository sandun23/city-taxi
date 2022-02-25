<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {
	
	public function __construct() {
    	parent::__construct();	
			$this->load->model("infinitum/ModelCore");
  }
	
	public function index() {
		$data = array(
			"assets" => $this->ModelCore->getAssets()
		);	

		$this->load->view("index", $data);
	}
	public function aboutus() {
		$data = array(
			"assets" => $this->ModelCore->getAssets()
		);	
		$this->load->view("aboutus", $data);
	}

	public function ourservices() {
		$data = array(
			"assets" => $this->ModelCore->getAssets()
		);	
		$this->load->view("ourservices", $data);
	}
	
	public function ourvehicles() {
		$data = array(
			"assets" => $this->ModelCore->getAssets()
		);	
		$this->load->view("ourvehicles", $data);
	}

	public function packages() {
		$data = array(
			"assets" => $this->ModelCore->getAssets()
		);	
		$this->load->view("packages", $data);
	}

	public function contactus() {
		$data = array(
			"assets" => $this->ModelCore->getAssets()
		);	
		$this->load->view("contactus", $data);
	}

	public function signup() {
		$data = array(
			"assets" => $this->ModelCore->getAssets()
		);	
		$this->load->view("signup", $data);
	}

	public function signin() {
		$data = array(
			"assets" => $this->ModelCore->getAssets()
		);	
		$this->load->view("signin", $data);
	}

	public function ridewithcitytaxi() {
		$data = array(
			"assets" => $this->ModelCore->getAssets()
		);
		$this->load->view("ridewithcitytaxi", $data);
	}

	public function customerdashboard() {
		$data = array(
			"assets" => $this->ModelCore->getAssets()
		);	
		$this->load->view("customerdashboard", $data);
	}

	public function driverdashboard() {
		$data = array(
			"assets" => $this->ModelCore->getAssets()
		);	
		$this->load->view("driverdashboard", $data);
	}

	public function sitemap() {
		header ("Content-Type:text/xml");
		$this->load->view("sitemap");
	}
}