<?php
class blog extends CI_Controller{
    public function index(){
        $data ['nama'] = "CodeIgniter 3";
        $this->load->view("blog/index",$data);
    }
    public function add(){
        echo "Ini halaman tambahan blog";
    }
}
?>