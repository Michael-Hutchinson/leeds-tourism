<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
    protected $login_form_validation = array(
                                       array('field' => 'username', 'label' => 'Username', 'rules' => 'trim|required'),
                                       array('field' => 'password', 'label' => 'Password', 'rules' => 'trim|required'));

	function __construct() {
        parent::__construct();
        
        //Logged in check
        if($this->session->userdata('current_user')) {
            $user_data = $this->session->userdata('current_user');

            //Redirect to correct area depending on user role
            if($user_data['user_role'] == 'admin') redirect('admin', 'location');
            else redirect('dashboard', 'location');
        }
        
        //Load user model
        $this->load->model('user_model');
    	
    	//Load Head Tags
        $this->load->view('main/page_components/head-tags');

        //Load Header
        $this->load->view('main/page_components/header');

        //Load Navbar
        $this->load->view('main/page_components/navbar');
    }

	public function index()
	{
        //Set form validation
        $this->form_validation->set_rules($this->login_form_validation);
        // $this->form_validation->set_message('check_database', 'Invalid username or password');

        if($this->form_validation->run() == false) $this->load->view('main/login_form');
        else {
            //Get form data
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            
            //Attempt login
            $user_details = $this->user_model->login($username, $password);
            
            if($user_details) { 
                //Login success, set session data
                $session_array = array('id' => $user_details->id, 'email' => $user_details->email, 'username' => $user_details->username, 'first_name' => $user_details->first_name, 'surname' => $user_details->surname, 'user_role' => $this->user_model->get_user_role($user_details->user_role_id));
                $this->session->set_userdata('current_user', $session_array);
                
                //Redirect to correct area depending on user role
                $user_data = $this->session->userdata('current_user');
                if($user_data['user_role'] == 'admin') redirect('admin', 'location');
                else redirect('dashboard', 'location');
            }
            else {
                $this->session->set_flashdata("Login_Error", "<div class='alert alert-danger' role='alert'>Your Username or Password was incorrect. Please Try Again</div>");

            }
            //Load content
            $this->load->view('main/login_form');
        }

        //Load Footer Tags
        $this->load->view('main/page_components/footer-tags');

        //Load Footer
    	$this->load->view('main/page_components/form_footer');
	}
}


