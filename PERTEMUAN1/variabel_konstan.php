<?php
// variable konstan atau tidak bisa diubah dengan isi nilai baru berbeda dengan variable biasa.
define ("PHI", 3.14);
define ("DBNAME", "inventori");
define ("DBSERVER", "localhost");
$a= 8;
$luas= PHI * $a * $a;
$kll= 2 * PHI * $jari;

echo "Luas lingkaran dengan jari-jari $jari : $luas .";
echo "<br> Keliing nya bernilai: $kll";
?>
<hr>
<?php
echo "Nama Databasenya: " .DBNAME;
echo "<br> Lokasi Databasenya: ". DBSERVER;
?>