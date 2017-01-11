<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {
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

        //Load user model
        $this->load->model('blog_Post_model');
        $data['rows'] = $this->blog_Post_model->get_all_posts();

        //Load Content
        $this->load->view('main/blog_view', $data);

        //Load Footer Tags
        $this->load->view('main/page_components/footer-tags');

        //Load Footer
        $this->load->view('main/page_components/footer');
    }

    public function post($id = null)
    {
        if(isset($id)) {
            //Load user model
            $this->load->model('blog_Post_model');
            $post = $this->blog_Post_model->get_post($id);
        
            if(!empty($post)) {
                $data['row'] = $this->blog_Post_model->get_post($id);   
                
                //Load Content
                $this->load->view('main/single_blog_view', $data);

            //Load Footer Tags
            $this->load->view('main/page_components/footer-tags');

            //Load Footer
            $this->load->view('main/page_components/footer');
            }
            else {
                redirect('blog');
            }
        }
        else 
        redirect('blog');
    }
}