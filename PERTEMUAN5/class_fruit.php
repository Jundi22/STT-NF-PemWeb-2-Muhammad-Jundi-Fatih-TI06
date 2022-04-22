<?php
class Fruit{
    public $name;
    public $warna;

    public function __construct($name, $warna){
        $this->name = $name;
        $this->warna = $warna;
    }
    public function intro(){
        echo "<br>Nama aku adalah {$this->name} dan warna aku adalah {$this->warna}";
    }
}
class Strawberry extends Fruit{ //extends adalah keyword untuk inherite atau memasukkan class turunan dari class seblumnya.
    public function pesan(){
        echo "Aku adalah strawberry atau pisang?";
    }
}
$buah = new Strawberry('strawberry','merah');
$buah->pesan();
$buah->intro();
?>