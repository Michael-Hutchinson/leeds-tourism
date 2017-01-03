<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logout extends CI_Controller {
	public function index() {
        //Unset session data
        $this->session->unset_userdata('current_user');
        session_destroy();
        
        //Redirect to home page
        redirect('', 'location');
    }
}