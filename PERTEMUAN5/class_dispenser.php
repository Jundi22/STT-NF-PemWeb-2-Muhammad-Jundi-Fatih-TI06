<?php
class Dispenser{
    protected $volume;
    protected $hargaSegelas;
    const volumeGelas = 250 . " ML";
    public $namaMinuman;

    public function set_volume($v){
        return $this->volume = $v;
    }
    public function set_hargaSegelas($hs){
        return $this->hargaSegelas = $hs;
    }
    public function pengurangan($vol){
        $this->volume = $vol - self::volumeGelas;
        echo "Hasil volume bernilai" ." ". $this->volume . " ML";
    }
}

$air = new Dispenser();
echo $air -> namaMinuman = "<p style='text-align:center;'>  Minuman Le Minerale<p/>";
echo "<hr>";
echo $air -> set_volume("Volumenya adalah 1000 ML");
echo "<br>";
echo $air -> set_hargaSegelas("Harga segelasnya adalah Rp.". number_format("3000",0,".","."));
echo "<br>";
echo "Jundi membeli air 1 gelas yang bervolume ". Dispenser::volumeGelas;
echo "<br>";
$air->pengurangan(1000);
?>