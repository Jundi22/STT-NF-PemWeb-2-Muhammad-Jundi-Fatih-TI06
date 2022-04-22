<?php
class Mahasiswa_model extends CI_Model{
    //buat property 
    public $id, $nama, $nim, $gender, $tmp_lahir, $tgl_lahir, $ipk;

    //buat function
    public function predikat(){
        $predikat = ($this->ipk >= 3.75) ? "Cumlaude" : "Baik";
        return $predikat;
    }
}
?>