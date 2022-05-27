<?php
class Dosen_model extends CI_Model{
    public $nidn;
    public $pendidikan;

    public function getAll(){
        // Menampilkan seluruh data yang ada di table dosen menggunakan query builder
        $query = $this->db->get('dosen');
        return $query->result();
    }
    public function getById($id){
        // menampilkan seluruh data berdasarkan id 
        $query = $this->db->get_where('dosen', ['id' => $id]);
        return $query->row();
    }
    public function simpan($data){
        $sql = "INSERT INTO dosen (nama,gender,tmp_lahir,tgl_lahir,nidn,pendidikan) VALUE (?,?,?,?,?,?)";

        $this->db->query($sql, $data);
        $insert_id = $this->db->insert_id();
        return $this->getById($insert_id);
    }
    public function update($data){
        $sql = "UPDATE dosen SET nama=?, gender=?, tmp_lahir=?, tgl_lahir=?, nidn=?, pendidikan=? WHERE id=?";
        $this->db->query($sql,$data);
    }
    public function delete($data){
        // hapus data dosen
        $sql = "DELETE FROM dosen WHERE id=?";
        $this->db->query($sql, $data);
    }
}

?>