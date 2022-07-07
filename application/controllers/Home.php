<?php
class Home extends CI_Controller{
    public function index(){
        // render view
        $this->load->view('home/index');
    }
    public function about(){
        // render view
        $this->load->view('home/about');
    }
    public function managemen(){
        // render view
        $this->load->view('home/managemen');
    }
    public function rental(){
        // render view
        $this->load->view('home/rental');
    }
    public function kontak(){
        // render view
        $this->load->view('home/kontak');
    }
}
?>