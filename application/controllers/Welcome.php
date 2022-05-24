<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	function __contruct(){
		parent::__construct();
		$this->load->database();
	}
}
