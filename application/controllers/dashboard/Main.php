<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {
    function __construct() {
        parent::__construct();

        if($this->session->userdata('current_user')) {
            $user_data = $this->session->userdata('current_user');

            //Redirect to correct area depending on user role
            if($user_data['user_role'] == 'admin') redirect('admin', 'location');
        }

        //Load Head Tags
        $this->load->view('main/page_components/head-tags');

        //Load Header
        $this->load->view('main/page_components/header');
    }

    public function index()
    {
        if($this->session->userdata('current_user'))
   {
     $session_data = $this->session->userdata('current_user');
     $data['username'] = $session_data['username'];
     $this->load->view('member_dashboard/page_components/logged_in_navbar', $data);
   }
   else
   {
     //If no session, redirect to login page
     redirect('login', 'refresh');
   }

        $this->load->view('member_dashboard/main_view');

        //Load Footer Tags
        $this->load->view('main/page_components/footer-tags');

        //Load Footer
        $this->load->view('main/page_components/footer');
    }
}