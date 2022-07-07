<?php
class Mobil_model extends CI_Model{
    // buat property atau variabel
    public $id, $nopol, $warna, $biaya_sewa, $deskripsi, $cc, $tahun, $merk_id, $foto;

    public function getAll(){
        // Menampilkan seluruh data yang ada di table mobil menggunakan query builder
        $query = $this->db->get('mobil');
        return $query->result();
    }
    public function getById($id){
        // menampilkan 
        $query = $this->db->get_where('mobil', ['id' => $id]);
        return $query->row();
    }
    // Baru
    public function simpan($data){
        $sql = "INSERT INTO mobil (nopol,warna,biaya_sewa,deskripsi,cc,tahun,merk_id,foto) VALUE (?,?,?,?,?,?,?,?)";

        $this->db->query($sql, $data);
        $insert_id = $this->db->insert_id();
        return $this->getById($insert_id);
    }
    public function update($data){
        $sql = "UPDATE mobil SET nopol=?, warna=?, biaya_sewa=?, deskripsi=?, cc=?, tahun=?, merk_id=?, foto=? WHERE id=?";
        $this->db->query($sql,$data);
    }
    public function delete($data){
        // hapus data mahasiswa
        $sql = "DELETE FROM mobil WHERE id=?";
        $this->db->query($sql, $data);
    }
}
?>