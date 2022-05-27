<?php
class Blog extends CI_Controller{
    public function index(){
        $data ['nama'] = "CodeIgneter 3";
        $this->load->view("blog/index", $data);
    }
    public function add(){
        $this->load->view("blog/add");
    }
}
?>