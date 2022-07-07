<?php
class Jenis_perawatan extends CI_Controller{
    // membuat method index
// METHOD jenis
    public function index(){
        // akses model jenis
        $this->load->model('jenis_perawatan_model');
        $jenis = $this->jenis_perawatan_model->getAll();
        $data['jenis'] = $jenis;
        // render data dan kirim data ke dalam view
        $this->load->view('layouts/header'); 
        $this->load->view('jenis_perawatan/index', $data);
        $this->load->view('layouts/sidebar');
        $this->load->view('layouts/footer');

    }
    public function detail($id){
        // akses model jenis
        $this->load->model('jenis_perawatan_model');
        $jenis = $this->jenis_perawatan_model->getById($id);
        $data['jenis'] = $jenis;
        // render data dan kirim data ke dalam view
        $this->load->view('layouts/header'); 
        $this->load->view('jenis_perawatan/detail', $data);
        $this->load->view('layouts/sidebar');
        $this->load->view('layouts/footer');
    }
    
    public function form(){
        $this->load->view('layouts/header');
        $this->load->view('jenis_perawatan/form');
        $this->load->view('layouts/sidebar');
        $this->load->view('layouts/footer');
    }
    public function save(){
        // akses ke model jenis
        $this->load->model('jenis_perawatan_model', 'jenis_perawatan'); //1
        $_nama = $this->input->post('nama');
      
        $data_jenis['nama'] = $_nama; //2


       if((!empty($_idedit))){  //update
           $data_jenis['id'] = $_idedit;
           $this->jenis->update($data_jenis);
       }else{
        //    data baru
        $this->jenis_perawatan->simpan($data_jenis);
       }
       redirect('jenis_perawatan','refresh');
    }
    public function edit($id){
        // akses model jenis
        $this->load->model('jenis_perawatan_model','jenis_perawatan');
        $obj_jenis = $this->jenis_perawatan->getById($id);
        $data['obj_jenis'] = $obj_jenis;
        $this->load->view('layouts/header');
        $this->load->view('jenis_perawatan/edit', $data);
        $this->load->view('layouts/sidebar');
        $this->load->view('layouts/footer');
    }
    public function delete($id){
        $this->load->model('jenis_perawatan_model','jenis_perawatan');
        // Mengecek data jenis berdasarkan id
        $data_jenis['id'] = $id;
        $this->jenis_perawatan->delete($data_jenis);
        redirect('jenis_perawatan','refresh');
    }
    public function __construct(){
        parent:: __construct();
        if(!$this->session->userdata('logged_in')){
            // redirect('/login');
        }
    }
}
?>