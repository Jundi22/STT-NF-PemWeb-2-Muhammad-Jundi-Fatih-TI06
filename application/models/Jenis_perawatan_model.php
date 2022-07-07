<?php
class Jenis_perawatan_model extends CI_Model{
    // buat property atau variabel
    public $id, $nama;

    public function getAll(){
        // Menampilkan seluruh data yang ada di table merk menggunakan query builder
        $query = $this->db->get('jenis_perawatan');
        return $query->result();
    }
    public function getById($id){
        // menampilkan 
        $query = $this->db->get_where('jenis_perawatan', ['id' => $id]);
        return $query->row();
    }
    // Baru
    public function simpan($data){
        $sql = "INSERT INTO jenis_perawatan (nama) VALUE (?)";

        $this->db->query($sql, $data);
        $insert_id = $this->db->insert_id();
        return $this->getById($insert_id);
    }
    public function update($data){
        $sql = "UPDATE jenis_perawatan SET nama=? WHERE id=?";
        $this->db->query($sql,$data);
    }
    public function delete($data){
        // hapus data jenis perawatan
        $sql = "DELETE FROM jenis_perawatan WHERE id=?";
        $this->db->query($sql, $data);
    }
}
?>