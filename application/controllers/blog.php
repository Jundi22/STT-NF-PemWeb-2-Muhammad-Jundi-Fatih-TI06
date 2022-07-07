<?php
class Blog extends CI_Controller{
    public function index(){
        $data ['nama'] = "CodeIgneter 3";
        $this->load->view("layouts/header", $data);
        $this->load->view("layouts/sidebar", $data);
        $this->load->view("blog/index", $data);
        $this->load->view("layouts/footer", $data);
    }
    public function add(){
        $this->load->view("blog/add");
    }
}
?>