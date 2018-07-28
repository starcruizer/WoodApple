<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->view('home/home');
	}

	public function events()
    {
        $this->load->view('home/events');
    }
    
    public function team()
    {
    	$this->load->view('home/team');
    }

    public function gallery()
    {
        $this->load->view('home/gallery');
    }

    public function about()
    {
        $this->load->view('home/about');
    }
    
    public function test()
    {
        $this->load->view('home/test');
    }
}
