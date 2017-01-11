<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class View extends CI_Controller {
        protected $eat_form_validation = array(
                                       array('field' => 'section_category_id', 'label' => 'Nav Link Category', 'rules' => 'trim|required'),
                                       array('field' => 'name', 'label' => 'Nav Link', 'rules' => 'trim|required'),
                                       array('field' => 'title', 'label' => 'Page Title', 'rules' => 'trim|required'),
                                       array('field' => 'body', 'label' => 'Body', 'rules' => 'trim|required'));
	function __construct() {
        parent::__construct();

        if($this->session->userdata('current_user')) {
            $user_data = $this->session->userdata('current_user');

            //Redirect to correct area depending on user role
            if($user_data['user_role'] == 'regular') redirect('dashboard', 'location');
        }
        //Load user model
        $this->load->model('eat_model');

        //Load Header
        $this->load->view('main/page_components/head-tags');

        //Load Navbar
        $this->load->view('main/page_components/header');

    }

    public function index()
    {
        //Load user model
        $this->load->model('eat_model');
        $data['rows'] = $this->eat_model->get_all_eat();

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

        $this->load->view('admin_dashboard/pages/eat/view_all_eat');

        //Load Footer Tags
        $this->load->view('main/page_components/footer-tags');

        //Load Footer
        $this->load->view('admin_dashboard/page_components/footer');
    }
    public function edit($id = null)
    {
            //Load user model
            $this->load->model('eat_model');
            $data['row'] = $this->eat_model->get_eat($id);
            $data['left_nav_headings'] = $this->eat_model->get_left_nav_headings();

        //Set form validation
        $this->form_validation->set_rules($this->eat_form_validation);
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
            $this->load->view('admin_dashboard/pages/eat/edit_eat', $data);
        else {

            $section_category_id = $this->input->post('section_category_id');
            $name = $this->input->post('name');
            $title = $this->input->post('title');
            $body = $this->input->post('body');

            $this->eat_model->edit_eat($id,$section_category_id,$name,$title,$body);
            $this->session->set_flashdata('message', '1 entry updated!');

        redirect('admin/eat/view');
}
        //Load Footer Tags
        $this->load->view('main/page_components/footer-tags');

        //Load Footer
        $this->load->view('admin_dashboard/page_components/footer');
    }
    public function delete($id = null)
    {
    
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

            $this->load->model('eat_model');
            $delete = $this->eat_model->delete_eat($id);
            redirect('admin/eat/view/');

            //Load Footer Tags
            $this->load->view('main/page_components/footer-tags');

            //Load Footer
            $this->load->view('main/page_components/footer');
    }

    public function add()
    {
        $data['left_nav_headings'] = $this->eat_model->get_left_nav_headings();
        //Set form validation
        $this->form_validation->set_rules($this->eat_form_validation);
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
            $this->load->view('admin_dashboard/pages/eat/add_eat');
        else {

            $name = $this->input->post('name');
            $title = $this->input->post('title');
            $body = $this->input->post('body');
            $section_category_id = $this->input->post('section_category_id');

            $this->eat_model->add_eat($name, $title, $body, $section_category_id);
            $this->session->set_flashdata('message', '1 new entry added!');

        redirect('admin/eat/view/add');
}
        //Load Footer Tags
        $this->load->view('main/page_components/footer-tags');

        //Load Footer
        $this->load->view('admin_dashboard/page_components/footer');
    }
}