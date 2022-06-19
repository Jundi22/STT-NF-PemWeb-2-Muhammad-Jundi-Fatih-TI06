<?php
class Tampil extends CI_Controller{
    public function index(){
        // akses model mahasiswa
        $this->load->model('mahasiswa_model');
        $mahasiswa = $this->mahasiswa_model->getAll();
        $data['mahasiswa'] = $mahasiswa;
        // render data dan kirim data ke dalam view
        $this->load->view('layouts/header'); 
        $this->load->view('mahasiswa/tampil', $data);
        $this->load->view('layouts/footer');

    }
    public function matkul(){
        // akses model matakuliah
        $this->load->model('matakuliah_model');
        $matakuliah = $this->matakuliah_model->getAll();
        $data['matakuliah'] = $matakuliah;
        // render data dan kirim data ke dalam view
        $this->load->view('layouts/header'); 
        $this->load->view('matakuliah/tampil', $data);
        $this->load->view('layouts/footer'); 
    }
    public function dosen(){
        // akses model dosen
        $this->load->model('dosen_model');
        $dosen = $this->dosen_model->getAll();
        $data['dosen'] = $dosen;
        // render data dan kirim data ke dalam view
        $this->load->view('layouts/header'); 
        $this->load->view('dosen/tampil', $data);
        $this->load->view('layouts/footer'); 
    }
}
?>