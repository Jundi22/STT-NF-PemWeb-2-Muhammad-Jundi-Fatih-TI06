<?php
class Merk_model extends CI_Model{
    // buat property atau variabel
    public $id, $nama, $produk;

    public function getAll(){
        // Menampilkan seluruh data yang ada di table merk menggunakan query builder
        $query = $this->db->get('merk');
        return $query->result();
    }
    public function getById($id){
        // menampilkan 
        $query = $this->db->get_where('merk', ['id' => $id]);
        return $query->row();
    }
    // Baru
    public function simpan($data){
        $sql = "INSERT INTO merk (nama,produk) VALUE (?,?)";

        $this->db->query($sql, $data);
        $insert_id = $this->db->insert_id();
        return $this->getById($insert_id);
    }
    public function update($data){
        $sql = "UPDATE merk SET warna=?, produk=? WHERE id=?";
        $this->db->query($sql,$data);
    }
    public function delete($data){
        // hapus data mahasiswa
        $sql = "DELETE FROM merk WHERE id=?";
        $this->db->query($sql, $data);
    }
}
?>