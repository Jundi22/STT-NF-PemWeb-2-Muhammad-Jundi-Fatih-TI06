<?php
class Mobil extends CI_Controller{
    public function index(){
        // akses model mobil
        $this->load->model('mobil_model');
        $mobil = $this->mobil_model->getAll();
        $data['mobil'] = $mobil;
      
        $this->load->view('layouts/header'); 
        $this->load->view('mobil/index.php', $data);
        $this->load->view('layouts/sidebar');
        $this->load->view('layouts/footer');
       
    }
    // public function user(){
    //     $data['user'] = $this->db->get_where('users', ['username' =>
    //     $this->session->userdata('username')])->row_array();

    //     $this->load->view('layouts/header');
    //     $this->load->view('mobil/index', $data);
    //     $this->load->view('layouts/sidebar');
    //     $this->load->view('layouts/footer');
    // }
    public function detail($id){
        // akses model mobil
       
        $this->load->model('mobil_model');
        $car = $this->mobil_model->getById($id);
        $data['car'] = $car;
        
        // render data dan kirim data ke dalam view
        $this->load->view('layouts/header'); 
        $this->load->view('mobil/detail.php', $data);
        $this->load->view('layouts/sidebar');
        $this->load->view('layouts/footer');
  
    }
    
    public function form(){
        
      
        $this->load->view('layouts/header');
        $this->load->view('mobil/form.php');
        $this->load->view('layouts/sidebar');
        $this->load->view('layouts/footer');
    
    }
    public function save(){
        
        $this->load->model('mobil_model', 'mobil'); //1
        $_plat = $this->input->post('nopol');
        $_warna = $this->input->post('warna');
        $_biaya_sewa = $this->input->post('biaya_sewa');
        $_deskripsi = $this->input->post('deskripsi');
        $_cc = $this->input->post('cc');
        $_tahun = $this->input->post('tahun');
        $_merk_id = $this->input->post('merk_id');
        $_foto = $this->input->post('foto');

       $data_mobil['nopol'] = $_plat; //2
       $data_mobil['warna'] = $_warna;
       $data_mobil['biaya_sewa'] = $_biaya_sewa;
       $data_mobil['deskripsi'] = $_deskripsi;
       $data_mobil['cc'] = $_cc;
       $data_mobil['tahun'] = $_tahun;
       $data_mobil['merk_id'] = $_merk_id;
       $data_mobil['foto'] = $_foto;

       if((!empty($_idedit))){  //update
           $data_mobil['id'] = $_idedit;
           $this->mobil->update($data_mobil);
       }else{
        //    data baru
        $this->mobil->simpan($data_mobil);
       }
       redirect('mobil','refresh');
    
    }
    public function edit($id){
        // akses model mobil
        $this->load->model('mobil_model','mobil');
        $obj_mobil = $this->mobil->getById($id);
        $data['obj_mobil'] = $obj_mobil;
        $this->load->view('layouts/header');
        $this->load->view('mobil/edit', $data);
        $this->load->view('layouts/sidebar');
        $this->load->view('layouts/footer');
    }
    public function delete($id){
        $this->load->model('mobil_model','mobil');
        // Mengecek data mobil berdasarkan id
        $data_mobil['id'] = $id;
        $this->mobil->delete($data_mobil);
        redirect('mobil','refresh');
    }
    public function __construct(){
        parent:: __construct();
        if(!$this->session->userdata('logged_in')){
            // redirect('/login');
        }
    }

    public function upload(){
        $_idmobil = $this->input->post("idmobil");
        // akses obj model
        $this->load->model('mobil_model','mobil');
        $car = $this->mobil->getById($_idmobil);
        $data['car'] = $car;

        $config ['upload_path'] = './uploads/photo';
        $config ['allowed_types'] = 'jpg|png';
        $config ['max_size'] = 2894;
        $config ['max_width'] = 2894;
        $config ['max_height'] = 2894;
        $config ['file_name'] = $car->id;

        // menginisialisasi file upload
        $this->load->library('upload',$config);

        if(!$this->upload->do_upload('foto')){
            $data['error'] = $this->upload->display_errors();
        }else{
            $data['upload_data'] = $this->upload->data();
            $data['error'] = 'Data Sukses';
        }

        // render atau kirim ke view
        $this->load->view('layouts/header'); 
        $this->load->view('mobil/detail', $data);
        $this->load->view('layouts/sidebar');
        $this->load->view('layouts/footer');
    }
}
?>