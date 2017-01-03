<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {
    protected $contact_form_validation = array(
                                       array('field' => 'name', 'label' => 'Name', 'rules' => 'required'),
                                       array('field' => 'phone', 'label' => 'Phone', 'rules' => 'required'),
                                       array('field' => 'email', 'label' => 'Email', 'rules' => 'required'),
                                       array('field' => 'message', 'label' => 'Message', 'rules' => 'required'));

    function __construct() {
        parent::__construct();
        
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
        $this->form_validation->set_rules($this->contact_form_validation);

        if($this->form_validation->run() == false) { $this->load->view('main/contact_form'); }
        else {
            $name = $this->input->post('name');
            $phone = $this->input->post('phone');
            $email = $this->input->post('email');
            $message = $this->input->post('message');

            $this->email->from(set_value("email"), set_value("name"));
            $this->email->to("hutchyy@hotmail.com");
            $this->email->subject("HSCB Contact Form Message From:  $name");
            $this->email->message("You have received a new message from your website's contact form.\n\n"."Here are the details:\n\nName: $name\n\nPhone: $phone\n\nEmail: $email\n\nMessage:\n$message");
            
            if ($this->email->send()) {
                $this->session->set_flashdata('msg','<div class="alert alert-success text-center">Your mail has been sent successfully!</div>');
                redirect('contact');
            }
            else {
                $this->session->set_flashdata('msg','<div class="alert alert-danger text-center">There is error in sending mail! Please try again later</div>');
                redirect('contact');
            }

            //Load content
            $this->load->view('main/contact_form');
        }

        //Load Footer Tags
        $this->load->view('main/page_components/footer-tags');

        //Load Footer
        $this->load->view('main/page_components/footer');
    }
}