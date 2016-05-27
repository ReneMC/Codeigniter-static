<?php
class Blog extends CI_controller {

	public function index(){
		echo "Hola!";
	}

	public function date(){
		echo date("Y-m-d");
		echo "<br>";
		echo time();
	}

}