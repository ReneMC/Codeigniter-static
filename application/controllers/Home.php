<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index(){

		$this->load->view('templates/header');
		$this->load->view('templates/nav');
		$this->load->view('home/banner');
		$this->load->view('home/index_view');
		$this->load->view('home/cta');
		$this->load->view('templates/footer');
	}

}
