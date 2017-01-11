<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class See extends CI_Controller {
    function __construct() {
        parent::__construct();

        $this->load->model('see_model');
        
        //Load Header
        $this->load->view('main/page_components/head-tags');

        //Load Navbar
        $this->load->view('main/page_components/header');

        //Load Navbar
        $this->load->view('main/page_components/navbar');
    }

    public function index()
    {
        $data['left_nav_headings'] = $this->see_model->get_left_nav_headings();

        foreach ($data['left_nav_headings'] as $left_nav_heading) {
            $data['left_nav_sub_headings'][] = $this->see_model->get_left_nav_sub_headings($left_nav_heading->id);
        }

        //Load Content
        $this->load->view('main/see_view', $data);

        //Load Footer Tags
        $this->load->view('main/page_components/footer-tags');

        //Load Footer
        $this->load->view('main/page_components/footer');
    }

    public function page($id = null)
    {
        $data['left_nav_headings'] = $this->see_model->get_left_nav_headings();

        foreach ($data['left_nav_headings'] as $left_nav_heading) {
            $data['left_nav_sub_headings'][] = $this->see_model->get_left_nav_sub_headings($left_nav_heading->id);
        }

        if(isset($id)) {

            //Load user model
            $page = $this->see_model->get_see($id);
        
            if(!empty($page)) {
                $data['rows'] = $this->see_model->get_see($id);

                //Load Content
                $this->load->view('main/single_see', $data);

                //Load Footer Tags
                $this->load->view('main/page_components/footer-tags');

                //Load Footer
                $this->load->view('main/page_components/footer');
            }
            else {
                redirect('see');
            }
        }
        else
        redirect('see');
    }

}