<?php
class Dosen extends CI_Controller{
    public function index(){
        // akses model dosen
        $this->load->model('dosen_model');
        $dosen = $this->dosen_model->getAll();
        $data['dosen'] = $dosen;
        // render data dan kirim data ke dalam view
        $this->load->view('layouts/header'); 
        $this->load->view('dosen/index_dosen', $data);
        $this->load->view('layouts/footer'); 
    }
    public function detail_dosen($id){
        // akses model dosen
        $this->load->model('dosen_model');
        $dosen = $this->dosen_model->getById($id);
        $data['dosen'] = $dosen;
        // render data dan kirim data ke dalam view
        $this->load->view('layouts/header'); 
        $this->load->view('dosen/detail_dosen', $data);
        $this->load->view('layouts/footer');
    }
    // Baru
    public function form_dosen(){
        $this->load->view('layouts/header');
        $this->load->view('dosen/form_dosen');
        $this->load->view('layouts/footer');
    }
    public function save_dosen(){
        // akses ke model dosen
        $this->load->model('dosen_model', 'dosen'); //3
        $_nama = $this->input->post('nama');
        $_gender = $this->input->post('gender');
        $_tmp_lahir = $this->input->post('tmp_lahir');
        $_tgl_lahir = $this->input->post('tgl_lahir');
        $_nidn = $this->input->post('nidn');
        $_pendidikan = $this->input->post('pendidikan');

       $data_dosen['nama'] = $_nama; //4
       $data_dosen['gender'] = $_gender;
       $data_dosen['tmp_lahir'] = $_tmp_lahir;
       $data_dosen['tgl_lahir'] = $_tgl_lahir;
       $data_dosen['nidn'] = $_nidn;
       $data_dosen['pendidikan'] = $_pendidikan;

       if((!empty($_idedit))){  //update
           $data_dosen['id'] = $_idedit;
           $this->dosen->update($data_dosen);
       }else{
        // data baru
        $this->dosen->simpan($data_dosen);
       }
       redirect('dosen','refresh');
    }
    public function edit_dosen($id){
        // akses model dosen
        $this->load->model('dosen_model','dosen');
        $obj_dosen = $this->dosen->getById($id);
        $data['obj_dosen'] = $obj_dosen;
        $this->load->view('layouts/header');
        $this->load->view('dosen/edit_dosen', $data);
        $this->load->view('layouts/footer');
    }
    public function delete_dosen($id){
        $this->load->model('dosen_model','dosen');
        // Mengecek data dosen berdasarkan id
        $data_dosen['id'] = $id;
        $this->dosen->delete($data_dosen);
        redirect('dosen','refresh');
    }
    public function __construct(){
        parent:: __construct();
        if(!$this->session->userdata('logged_in')){
            redirect('/login');
        }
    }
}
?>