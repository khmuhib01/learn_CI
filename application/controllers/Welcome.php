<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

	public function index()
	{
		$this->load->database();
		$this->load->view('welcome_message');
	}

	public function call()
	{
		$this->load->view('contact/contact');
	}
}
