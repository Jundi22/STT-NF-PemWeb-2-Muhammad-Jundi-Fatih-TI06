<?php
class Mahasiswa_model extends CI_Model{
    //buat property 
    public $id, $nama, $nim, $gender, $tmp_lahir, $tgl_lahir, $ipk;

    //buat function
    public function predikat(){
        $predikat = ($this->ipk >= 3.75) ? "Cumlaude" : "Baik";
        return $predikat;
    }
    public function getAll(){
        //menampilkan seluruh data yang ada di table mahasiswa menggunakan query builder
        $query=$this->db->get('mahasiswa');
        return $query->result();
    }
    public function getById($id){
        //menampilkan data berdasarkan id
        $query = $this->db->get_where('mahasiswa',['id'=> $id]);
        return $query->row();
    }
}
?>