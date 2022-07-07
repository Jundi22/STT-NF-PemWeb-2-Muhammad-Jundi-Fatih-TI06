<?php
class Perawatan_model extends CI_Model{
    // buat property atau variabel
    public $id, $tanggal, $biaya, $km_mobil, $deskripsi, $mobil_id, $jenis_perawatan_id;

    public function getAll(){
        // Menampilkan seluruh data yang ada di table mobil menggunakan query builder
        $query = $this->db->get('perawatan');
        return $query->result();
    }
    public function getById($id){
        // menampilkan 
        $query = $this->db->get_where('perawatan', ['id' => $id]);
        return $query->row();
    }
    // Baru
    public function simpan($data){
        $sql = "INSERT INTO perawatan (tanggal,biaya,km_mobil,deskripsi,mobil_id,jenis_perawatan_id) VALUE (?,?,?,?,?,?)";

        $this->db->query($sql, $data);
        $insert_id = $this->db->insert_id();
        return $this->getById($insert_id);
    }
    public function update($data){
        $sql = "UPDATE perawatan SET tanggal=?, biaya=?, km_mobil=?, deskripsi=?, mobil_id=?, jenis_perawatan_id=? WHERE id=?";
        $this->db->query($sql,$data);
    }
    public function delete($data){
        // hapus data perawatan
        $sql = "DELETE FROM perawatan WHERE id=?";
        $this->db->query($sql, $data);
    }
}
?>