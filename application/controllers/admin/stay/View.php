<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class View extends CI_Controller {
        protected $stay_form_validation = array(
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
        $this->load->model('stay_model');

        //Load Header
        $this->load->view('main/page_components/head-tags');

        //Load Navbar
        $this->load->view('main/page_components/header');

    }

    public function index()
    {
        //Load user model
        $this->load->model('stay_model');
        $data['rows'] = $this->stay_model->get_all_stay();

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

        $this->load->view('admin_dashboard/pages/stay/view_all_stay');

        //Load Footer Tags
        $this->load->view('main/page_components/footer-tags');

        //Load Footer
        $this->load->view('admin_dashboard/page_components/footer');
    }
    public function edit($id = null)
    {
            //Load user model
            $this->load->model('stay_model');
            $data['row'] = $this->stay_model->get_stay($id);
            $data['left_nav_headings'] = $this->stay_model->get_left_nav_headings();

        //Set form validation
        $this->form_validation->set_rules($this->stay_form_validation);
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
            $this->load->view('admin_dashboard/pages/stay/edit_stay', $data);
        else {

            $section_category_id = $this->input->post('section_category_id');
            $name = $this->input->post('name');
            $title = $this->input->post('title');
            $body = $this->input->post('body');

            $this->stay_model->edit_stay($id,$section_category_id,$name,$title,$body);
            $this->session->set_flashdata('message', '1 entry updated!');

        redirect('admin/stay/view');
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

            $this->load->model('stay_model');
            $delete = $this->stay_model->delete_stay($id);
            redirect('admin/stay/view/');

            //Load Footer Tags
            $this->load->view('main/page_components/footer-tags');

            //Load Footer
            $this->load->view('main/page_components/footer');
    }

    public function add()
    {
        $data['left_nav_headings'] = $this->stay_model->get_left_nav_headings();
        //Set form validation
        $this->form_validation->set_rules($this->stay_form_validation);
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
            $this->load->view('admin_dashboard/pages/stay/add_stay');
        else {

            $name = $this->input->post('name');
            $title = $this->input->post('title');
            $body = $this->input->post('body');
            $section_category_id = $this->input->post('section_category_id');

            $this->stay_model->add_stay($name, $title, $body, $section_category_id);
            $this->session->set_flashdata('message', '1 new entry added!');

        redirect('admin/stay/view/add');
}
        //Load Footer Tags
        $this->load->view('main/page_components/footer-tags');

        //Load Footer
        $this->load->view('admin_dashboard/page_components/footer');
    }
}