<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {
        protected $register_form_validation = array(
                                       array('field' => 'first_name', 'label' => 'First Name', 'rules' => 'trim|required'),
                                       array('field' => 'surname', 'label' => 'Surname', 'rules' => 'trim|required'),
                                       array('field' => 'email', 'label' => 'Email', 'rules' => 'trim|required|valid_email'),
                                       array('field' => 'username', 'label' => 'Username', 'rules' => 'trim|required|min_length[4]'),
                                       array('field' => 'password', 'label' => 'Password', 'rules' => 'trim|required|min_length[4]|max_length[32]'));
    function __construct() {
        parent::__construct();

        if($this->session->userdata('current_user')) {
            $user_data = $this->session->userdata('current_user');

            //Redirect to correct area depending on user role
            if($user_data['user_role'] == 'regular') redirect('dashboard', 'location');
        }
        //Load user model
        $this->load->model('user_model');

        //Load Head Tags
        $this->load->view('main/page_components/head-tags');

        //Load Header
        $this->load->view('main/page_components/header');
    }

    public function index()
    {
        //Set form validation
        $this->form_validation->set_rules($this->register_form_validation);
        if($this->session->userdata('current_user'))
   {
     $session_data = $this->session->userdata('current_user');
     $data['session_data'] = $session_data;
     $this->load->view('admin_dashboard/page_components/logged_in_navbar', $data);
   }
   else
   {
     //If no session, redirect to login page
     redirect('login', 'refresh');
   }
        if($this->form_validation->run() == false) 
            $this->load->view('admin_dashboard/register_user');
        else {

            $first_name = $this->input->post('first_name');
            $surname = $this->input->post('surname');
            $email = $this->input->post('email');
            $username = $this->input->post('username');
            $password = $this->input->post('password');

            $this->user_model->register($first_name, $surname, $email, $username, $password);
            $this->session->set_flashdata('message', '1 new entry added!');

        redirect('register');
}

        //Load Footer Tags
        $this->load->view('main/page_components/footer-tags');

        //Load Footer
        $this->load->view('admin_dashboard/page_components/footer');
    }
}