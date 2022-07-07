<?php
class Dashboard extends CI_Controller
{
    function index()
    {   if($this->session->has_userdata('USERNAME')) {
            $this->load->view('layouts/header');
            $this->load->view('layouts/sidebar');
            $this->load->view('index');
            $this->load->view('layouts/footer');
        } else {
            redirect(base_url()."index.php/auth/login");
        }
    }
}