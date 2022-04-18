<?php 
class Pasien{
    public $id;
    public $kode;
    public $nama;
    public $tmpt_lahir;
    public $tgl_lahir;
    public $jenis_kelamin;
    public $email;

    public function __construct($id, $kode, $nama, $tmpt_lahir, $tgl_lahir, $jenis_kelamin, $email){
        $this->id = $id;
        $this->kode = "P" .sprintf("%03d", $this->id);
        $this->nama = $nama;
        $this->tmpt_lahir = $tmpt_lahir;
        $this->tgl_lahir = $tgl_lahir;
        $this->jenis_kelamin = $jenis_kelamin;
        $this->email = $email;
    }
}

trait Bmi{
    public $berat_badan;
    public $tinggi_badan;
    
    public function hasilBMI(){
        return $this->berat_badan / (($this->tinggi_badan/100)**2);
    }

    public function nilai($nilai){
        if ($nilai <= 18.4){
            return "Kekurangan Berat Badan";
        }elseif ($nilai >= 18.5 && $nilai <= 23.9){
            return "Sehat (Ideal)";
        }elseif ($nilai >= 24 && $nilai <= 26.9){
            return "Kelebihan Berat Badan";
        }elseif ($nilai >= 27 && $nilai <= 29.9){
            return "Obesitas 1";
        }elseif ($nilai >= 30){
            return "Obesitas 2";
        }
    }
}

class BmiPasien extends Pasien{
    use Bmi;
    public $bmi;
    public $tanggal;
    public $pasien;

    public function __construct($id, $tanggal, $nama, $tmpt_lahir, $tgl_lahir, $jenis_kelamin, $email, $berat_badan, $tinggi_badan){
        parent::__construct($id, $tanggal, $nama, $tmpt_lahir, $tgl_lahir, $jenis_kelamin, $email, $berat_badan, $tinggi_badan);
        $this->berat_badan = $berat_badan;
        $this->tinggi_badan = $tinggi_badan;
        $this->tanggal = date("Y-m-d");
    }
}
?>