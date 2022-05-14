<?php
class Mahasiswa extends CI_Controller{
    public function index(){

    //akses model mahasiswa
    $this->load->model('mahasiswa_model');
    $mahasiswa=$this->mahasiswa_model->getAll();
    $data['mahasiswa'] = $mahasiswa;
        //render data dan kirim data kedalam VIEW 
    $this->load->view('mahasiswa/index',$data);
    }
    public function detail($id){
        //akses mode mahasiswa
        $this->load->model('mahasiswa_model');
        $siswa= $this->mahasiswa_model->getById($id);
        $data['siswa']=$siswa;

        $this->load->view('mahasiswa/detail',$data);
    }
    public function dosen(){
        // model dosen
        $this->load->model('dosen_model');
        $dosen = $this->dosen_model->getAll();
        $data['dosen'] = $dosen;
        // Kirim data ke dalam view
        $this->load->view('layouts/header'); 
        $this->load->view('mahasiswa/dosen', $data);
        $this->load->view('layouts/footer'); 
    }
    public function detail_dosen($id){
        // akses model dosen
        $this->load->model('dosen_model');
        $dosen = $this->dosen_model->getById($id);
        $data['dosen'] = $dosen;
        // Kirim data ke dalam view
        $this->load->view('layouts/header'); 
        $this->load->view('mahasiswa/detail_dosen', $data);
        $this->load->view('layouts/footer');
    }
    //matakuliah
    public function matakuliah(){
        // model matakuliah
        $this->load->model('matakuliah_model');
        $matkul = $this->matakuliah_model->getAll();
        $data['matkul'] = $matkul;
        // Kirim data ke dalam view
        $this->load->view('layouts/header'); 
        $this->load->view('mahasiswa/matakuliah', $data);
        $this->load->view('layouts/footer'); 
    }
    public function detail_matakuliah($id){
        // akses model matakuliah
        $this->load->model('matakuliah_model');
        $matkul = $this->matakuliah_model->getById($id);
        $data['matkul'] = $matkul;
        // Kirim data ke dalam view
        $this->load->view('layouts/header'); 
        $this->load->view('mahasiswa/detail_matakuliah', $data);
        $this->load->view('layouts/footer');
    }
}
?>
