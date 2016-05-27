<?php
class About extends CI_Controller{

	public function index(){
		$this->load->view('templates/header');
		$this->load->view('templates/nav');
		$this->load->view('about_view');
		$this->load->view('templates/footer');
	}

}