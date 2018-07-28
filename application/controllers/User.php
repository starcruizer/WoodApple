<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function index()
	{
		$this->load->view('home/home');
	}

	public function login()
	{
		$this->load->view('user/login');
	}

	public function loginuser()
	{
		$user = $this->input->post('user');
		$pass = $this->input->post('pass');

		if($user=='shakeb')
		{
			if($pass=='shakeb')
			{
				echo 1;
			}
			else
			{
				echo 0;
			}
		}
	}
}
