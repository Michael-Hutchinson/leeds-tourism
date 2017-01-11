<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Stay extends CI_Controller {
	function __construct() {
        parent::__construct();

        $this->load->model('stay_model');
        
    	//Load Header
    	$this->load->view('main/page_components/head-tags');

    	//Load Navbar
    	$this->load->view('main/page_components/header');

        //Load Navbar
        $this->load->view('main/page_components/navbar');
    }

	public function index()
    {
        $data['left_nav_headings'] = $this->stay_model->get_left_nav_headings();

        foreach ($data['left_nav_headings'] as $left_nav_heading) {
            $data['left_nav_sub_headings'][] = $this->stay_model->get_left_nav_sub_headings($left_nav_heading->id);
        }

		//Load Content
    	$this->load->view('main/stay_view', $data);

        //Load Footer Tags
        $this->load->view('main/page_components/footer-tags');

		//Load Footer
    	$this->load->view('main/page_components/footer');
	}

    public function page($id = null)
    {
        $data['left_nav_headings'] = $this->stay_model->get_left_nav_headings();

        foreach ($data['left_nav_headings'] as $left_nav_heading) {
            $data['left_nav_sub_headings'][] = $this->stay_model->get_left_nav_sub_headings($left_nav_heading->id);
        }

        if(isset($id)) {

            //Load user model
            $page = $this->stay_model->get_stay($id);
        
            if(!empty($page)) {
                $data['rows'] = $this->stay_model->get_stay($id);

                //Load Content
                $this->load->view('main/single_stay', $data);

                //Load Footer Tags
                $this->load->view('main/page_components/footer-tags');

                //Load Footer
                $this->load->view('main/page_components/footer');
            }
            else {
                redirect('stay');
            }
        }
        else 
        redirect('stay');
    }

}