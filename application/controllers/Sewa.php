<?php
class Sewa extends CI_Controller{
    // membuat method index
// METHOD Sewa
    public function index(){
        // akses model mobil
        $this->load->model('sewa_model');
        $sewa = $this->sewa_model->getAll();
        $data['sewa'] = $sewa;
        // render data dan kirim data ke dalam view
        $this->load->view('layouts/header'); 
        $this->load->view('sewa/index', $data);
        $this->load->view('layouts/sidebar');
        $this->load->view('layouts/footer');

    }
    public function detail($id){
        // akses model sewa
        $this->load->model('sewa_model');
        $sewa = $this->sewa_model->getById($id);
        $data['sewa'] = $sewa;
        // render data dan kirim data ke dalam view
        $this->load->view('layouts/header'); 
        $this->load->view('sewa/detail', $data);
        $this->load->view('layouts/sidebar');
        $this->load->view('layouts/footer');
    }
    
    public function form(){
        $this->load->view('layouts/header');
        $this->load->view('sewa/form');
        $this->load->view('layouts/sidebar');
        $this->load->view('layouts/footer');
    }
    public function save(){
        // akses ke model sewa
        $this->load->model('sewa_model', 'sewa'); //1
        $_tanggal_mulai = $this->input->post('tanggal_mulai');
        $_tanggal_akhir = $this->input->post('tanggal_akhir');
        $_tujuan = $this->input->post('tujuan');
        $_noktp = $this->input->post('noktp');
        $_users_id = $this->input->post('users_id');
        $_mobil_id = $this->input->post('mobil_id');


       $data_sewa['nopol'] = $_tanggal_mulai; //2
       $data_sewa['tanggal_akhir'] = $_tanggal_akhir;
       $data_sewa['tujuan'] = $_tujuan;
       $data_sewa['noktp'] = $_noktp;
       $data_sewa['users_id'] = $_users_id;
       $data_sewa['mobil_id'] = $_mobil_id;


       if((!empty($_idedit))){  //update
           $data_sewa['id'] = $_idedit;
           $this->sewa->update($data_sewa);
       }else{
        //    data baru
        $this->sewa->simpan($data_sewa);
       }
       redirect('sewa','refresh');
    }
    public function edit($id){
        // akses model sewa
        $this->load->model('sewa_model','sewa');
        $obj_sewa = $this->sewa->getById($id);
        $data['obj_sewa'] = $obj_sewa;
        $this->load->view('layouts/header');
        $this->load->view('sewa/edit', $data);
        $this->load->view('layouts/sidebar');
        $this->load->view('layouts/footer');
    }
    public function delete($id){
        $this->load->model('sewa_model','sewa');
        // Mengecek data sewa berdasarkan id
        $data_sewa['id'] = $id;
        $this->sewa->delete($data_sewa);
        redirect('sewa','refresh');
    }
    public function __construct(){
        parent:: __construct();
        if(!$this->session->userdata('logged_in')){
            // redirect('/sewa');
        }
    }
}
?>