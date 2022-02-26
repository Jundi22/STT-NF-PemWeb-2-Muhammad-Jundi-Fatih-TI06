<?php
echo "<h1>ARRAY FUNGSI</h1>";
$ar_buah = ["p"=>"Pepaya","a"=>"Apel","m"=>"Mangga","j"=>"Jambu"];
echo "<ol>";
foreach ($ar_buah as $buah => $v) {
    echo "<li>$buah - $v</li>";
}
echo "</ol>";
// fungsi sort berguna untuk mengurtkan array dalam urutan menaik.
sort ($ar_buah);
echo "<hr>";
echo "<ol>";
foreach ($ar_buah as $buah => $k) {
    echo "<li>$buah - $v</li>";
}
echo "</ol>";
?>
<?php
// fungsi arsort berguna untuk mengurutkan array dalam menurun.
arsort ($ar_buah);
echo "<hr>";
echo "<ol>";
foreach ($ar_buah as $buah => $k) {
    echo "<li>$buah - $v</li>";
}
echo "</ol>";
echo "<hr>";
?>
<?php
// fungsi array pop untuk menghapus nilai terakhir dalam array.
$tims =["erwin","heru","ali","zaki"];
array_pop($tims);
foreach ($tims as $person) {
    echo "$person<br>";
}
echo"<hr>"
?>
<?php
// fungsi array push untuk menambahkan nilai ke dalam data array bagian terakhir.
$tims =["erwin","heru","ali","zaki"];
array_push($tims, "wati");
foreach ($tims as $person) {
    echo "$person<br>";
}
echo"<hr>"
?>
<?php
// fungsi array shift untuk menghapus nilai pertama pada array.
$tims =["erwin","heru","ali","zaki"];
array_shift($tims);
foreach ($tims as $person) {
    echo "$person<br>";
}
echo"<hr>"
?>
<?php
// funsi array unshift untuk menambahkan nillai array di urutan pertama. 
$tims =["erwin","heru","ali","zaki"];
array_unshift($tims, "joko","wati");
foreach ($tims as $person) {
    echo "$person<br>";
}
echo"<hr>"
?>