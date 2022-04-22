<?php
require_once "class_persegiPanjang.php";

$persegi = new PersegiPanjang();
echo "<br>";

echo "Panjang Persegi Panjang: ". $persegi->getpanjang(15);
echo "<br>Lebar Persegi Panjang: " . $persegi->getlebar(20);
echo "<br>"; 
echo "<br>Luas Persegi Panjang :". $persegi ->getluas();
echo "<br>keliling Persegi Panjang :". $persegi ->getkeliling();

?>