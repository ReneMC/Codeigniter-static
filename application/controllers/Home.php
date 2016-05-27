<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index(){
		$this->load->helper('url');

		$this->load->view('templates/header');
		$this->load->view('templates/nav');
		$this->load->view('templates/banner');
		$this->load->view('index_view');
		$this->load->view('templates/cta');
		$this->load->view('templates/footer');
	}

}