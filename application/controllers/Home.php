<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	function __construct() {
        parent::__construct();
    	
    	//Load Head Tags
    	$this->load->view('main/page_components/head-tags');

    	//Load Header
    	$this->load->view('main/page_components/header');

        //Load Navbar
        $this->load->view('main/page_components/navbar');
    }

	public function index()
	{
		//Load Content
    	$this->load->view('main/home_view');

        //Load Footer Tags
        $this->load->view('main/page_components/footer-tags');

		//Load Footer
    	$this->load->view('main/page_components/footer');
	}
}
