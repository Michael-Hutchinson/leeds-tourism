<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class View extends CI_Controller {
        protected $blog_form_validation = array(
                                       array('field' => 'title', 'label' => 'Title', 'rules' => 'trim|required'),
                                       array('field' => 'author', 'label' => 'Author', 'rules' => 'trim|required'),
                                       array('field' => 'image', 'label' => 'Image', 'rules' => 'trim|required'),
                                       array('field' => 'body', 'label' => 'Body', 'rules' => 'trim|required'));
	function __construct() {
        parent::__construct();

        if($this->session->userdata('current_user')) {
            $user_data = $this->session->userdata('current_user');

            //Redirect to correct area depending on user role
            if($user_data['user_role'] == 'regular') redirect('dashboard', 'location');
        }
        //Load user model
        $this->load->model('blog_Post_model');

        //Load Header
        $this->load->view('main/page_components/head-tags');

        //Load Navbar
        $this->load->view('main/page_components/header');

    }

    public function index()
    {
        //Load user model
        $this->load->model('blog_Post_model');
        $data['rows'] = $this->blog_Post_model->get_all_posts();

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

        $this->load->view('admin_dashboard/pages/blog/view_all_posts');

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


            $this->load->model('blog_Post_model');
            $delete = $this->blog_Post_model->delete_post($id);
            redirect('admin/blog/view');

            //Load Footer Tags
            $this->load->view('main/page_components/footer-tags');

            //Load Footer
            $this->load->view('main/page_components/footer');
    }

    public function edit($id = null)
    {
            //Load user model
            $this->load->model('blog_Post_model');
            $data['row'] = $this->blog_Post_model->get_post($id);

        //Set form validation
        $this->form_validation->set_rules($this->blog_form_validation);
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
            $this->load->view('admin_dashboard/pages/blog/edit_post', $data);
        else {

            $title = $this->input->post('title');
            $author = $this->input->post('author');
            $image = $this->input->post('image');
            $body = $this->input->post('body');

            $this->blog_Post_model->edit_post($id,$title,$author,$image,$body);
            $this->session->set_flashdata('message', '1 entry updated!');

        redirect('admin/blog/view');
}
        //Load Footer Tags
        $this->load->view('main/page_components/footer-tags');

        //Load Footer
        $this->load->view('admin_dashboard/page_components/footer');
    }

    public function add()
    {
        //Set form validation
        $this->form_validation->set_rules($this->blog_form_validation);
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
            $this->load->view('admin_dashboard/pages/blog/add_post');
        else {

            $title = $this->input->post('title');
            $author = $this->input->post('author');
            $image = $this->input->post('image');
            $body = $this->input->post('body');

            $this->blog_Post_model->add_post($title,$author,$image,$body);
            $this->session->set_flashdata('message', '1 new entry added!');

        redirect('admin/blog/view/add');
}
        //Load Footer Tags
        $this->load->view('main/page_components/footer-tags');

        //Load Footer
        $this->load->view('admin_dashboard/page_components/footer');
    }
}