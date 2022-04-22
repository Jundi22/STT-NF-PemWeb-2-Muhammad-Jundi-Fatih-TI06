<?php
//membuat class
class Manusia{
    //buat property
    var $nama;
    var $warna;

    //buat method atau function
    function tampilkan_nama(){
        return "Nama saya adalah Jundi";
    }
    function warna_kulit(){
        return "<br>Kulit saya coklat";
    }
}
//buat object
$manusia = new Manusia();

echo "<hr>";
echo $manusia -> tampilkan_nama();
echo $manusia -> warna_kulit();

?>