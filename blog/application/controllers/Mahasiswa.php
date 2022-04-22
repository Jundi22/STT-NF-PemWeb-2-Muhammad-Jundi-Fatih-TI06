<?php
class Mahasiswa extends CI_Controller{
    public function index(){
    $this->load->model('mahasiswa_model','mhs1');
    
    //buat object mhs1
    $this->mhs1->id= 1;
    $this->mhs1->nim= "0123";
    $this->mhs1->nama= "Jundi";
    $this->mhs1->gender="L";
    $this->mhs1->ipk= 3.85;

    $this->load->model('mahasiswa_model','mhs2');
        
    //buat object mhs2
    $this->mhs2->id= 1;
    $this->mhs2->nim= "0456";
    $this->mhs2->nama="Rafi";
    $this->mhs2->gender="L";
    $this->mhs2->ipk= 3.40;

        //simpan object yang kita buat ke dalam array
    $list_mhs= [$this->mhs1,$this->mhs2];

        //siapkan data untuk dikirim kedalam VIEW, dimana datanya diambil dari object yang kita simpan kebdalam Array
    $data['list_mhs']=$list_mhs;

        //render data dan kirim data kedalam VIEW 
    $this->load->view('mahasiswa/index',$data);
    }
}
?>