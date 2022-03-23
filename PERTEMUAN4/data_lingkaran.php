<?php
//memanggil file class lingkaran.php
require_once "class_lingkaran.php";

echo "Nilai PHI adalah ".Lingkaran::PHI;
$lingkar1 = new Lingkaran(10);
$lingkar2 = new Lingkaran(4);
echo "<br>";

//hitung luas lingkaran
echo "<br>Luas lingkaran 1 adalah ". $lingkar1 ->getluas();
echo "<br>Luas lingkaran 2 adalah ". $lingkar2 ->getluas();
echo "<br>";

//hitung keliling
echo "<br>keliling lingkaran 1 adalah ". $lingkar1 ->getkeliling();
echo "<br>keliling lingkaran 2 adalah ". $lingkar2 ->getkeliling();



?>