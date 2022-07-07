<?php
class Sewa_model extends CI_Model{
    // buat property atau variabel
    public $id, $tanggal_mulai, $tanggal_akhir, $tujuan, $noktp, $users_id, $mobil_id;

    public function getAll(){
        // Menampilkan seluruh data yang ada di table sewa menggunakan query builder
        $query = $this->db->get('sewa');
        return $query->result();
    }
    public function getById($id){
        // menampilkan 
        $query = $this->db->get_where('sewa', ['id' => $id]);
        return $query->row();
    }
    // Baru
    public function simpan($data){
        $sql = "INSERT INTO sewa (tanggal_mulai, tanggal_akhir, tujuan, noktp, users_id, mobil_id) VALUE (?,?,?,?,?,?)";

        $this->db->query($sql, $data);
        $insert_id = $this->db->insert_id();
        return $this->getById($insert_id);
    }
    public function update($data){
        $sql = "UPDATE sewa SET tanggal_mulai=?, tanggal_akhir=?, tujuan=?, noktp=?, users_id=?, mobil_id=? WHERE id=?";
        $this->db->query($sql,$data);
    }
    public function delete($data){
        // hapus data mahasiswa
        $sql = "DELETE FROM sewa WHERE id=?";
        $this->db->query($sql, $data);
    }
}
?>