<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index(){
		$this->load->view('welcome_message');
	}

	public function test(){
		$this->load->view('home_view');
	}

	public function hola(){
		echo "Hola!";
	}

	public function date(){
		echo date("Y-m-d");
		echo "<br>";
		echo time();
	}

	public function name($name){
		if($name){
			echo "Hello " . $name . "! nice to meet you.";
		}
		else {
			echo "If you could input your name in the URL that would be great.";
		}
		
	}

}
