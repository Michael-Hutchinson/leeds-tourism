<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Faq extends CI_Controller {
	function __construct() {
        parent::__construct();
    	
    	//Load Header
    	$this->load->view('main/page_components/head-tags');

    	//Load Navbar
    	$this->load->view('main/page_components/header');

        //Load Navbar
        $this->load->view('main/page_components/navbar');
    }

	public function index()
	{
		//Load Content
    	$this->load->view('main/faq_view');

        //Load Footer Tags
        $this->load->view('main/page_components/footer-tags');

		//Load Footer
    	$this->load->view('main/page_components/footer');
	}
}
