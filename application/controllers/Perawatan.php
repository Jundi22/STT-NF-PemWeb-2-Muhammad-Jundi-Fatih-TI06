<?php
class perawatan extends CI_Controller{
    // membuat method index
// METHOD perawatan
    public function index(){
        // akses model perawatan
        $this->load->model('perawatan_model');
        $perawatan = $this->perawatan_model->getAll();
        $data['perawatan'] = $perawatan;
        // render data dan kirim data ke dalam view
        $this->load->view('layouts/header'); 
        $this->load->view('perawatan/index', $data);
        $this->load->view('layouts/sidebar');
        $this->load->view('layouts/footer');

    }
    public function detail($id){
        // akses model perawatan
        $this->load->model('perawatan_model');
        $perawatan = $this->perawatan_model->getById($id);
        $data['perawatan'] = $perawatan;
        // render data dan kirim data ke dalam view
        $this->load->view('layouts/header'); 
        $this->load->view('perawatan/detail', $data);
        $this->load->view('layouts/sidebar');
        $this->load->view('layouts/footer');
    }
    
    public function form(){
        $this->load->view('layouts/header');
        $this->load->view('perawatan/form');
        $this->load->view('layouts/sidebar');
        $this->load->view('layouts/footer');
    }
    public function save(){
        // akses ke model perawatan
        $this->load->model('perawatan_model', 'perawatan'); //1
        $_tanggal = $this->input->post('tanggal');
        $_biaya = $this->input->post('biaya');
        $_km_mobil = $this->input->post('km_mobil');
        $_deskripsi = $this->input->post('deskripsi');
        $_mobil_id = $this->input->post('mobil_id');
        $_jenis_perawatan_id = $this->input->post('jenis_perawatan_id');
    

       $data_perawatan['tanggal'] = $_tanggal; //2
       $data_perawatan['biaya'] = $_biaya;
       $data_perawatan['km_mobil'] = $_km_mobil;
       $data_perawatan['deskripsi'] = $_deskripsi;
       $data_perawatan['mobil_id'] = $_mobil_id;
       $data_perawatan['jenis_perawatan_id'] = $_jenis_perawatan_id;
       

       if((!empty($_idedit))){  //update
           $data_perawatan['id'] = $_idedit;
           $this->perawatan->update($data_perawatan);
       }else{
        //    data baru
        $this->perawatan->simpan($data_perawatan);
       }
       redirect('perawatan','refresh');
    }
    public function edit($id){
        // akses model perawatan
        $this->load->model('perawatan_model','perawatan');
        $obj_perawatan = $this->perawatan->getById($id);
        $data['obj_perawatan'] = $obj_perawatan;
        $this->load->view('layouts/header');
        $this->load->view('perawatan/edit', $data);
        $this->load->view('layouts/sidebar');
        $this->load->view('layouts/footer');
    }
    public function delete($id){
        $this->load->model('perawatan_model','perawatan');
        // Mengecek data perawatan berdasarkan id
        $data_perawatan['id'] = $id;
        $this->perawatan->delete($data_perawatan);
        redirect('perawatan','refresh');
    }
    public function __construct(){
        parent:: __construct();
        if(!$this->session->userdata('logged_in')){
            // redirect('/login');
        }
    }
}
?>