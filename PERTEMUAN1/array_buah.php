<?php
// membuat variable array.
$ar_buah= ["Pepaya","Mangga","Pisang","Jambu"];
// cetak array.
echo "Ini adalah hasil data buah dalam array.";
echo "<br> $ar_buah[2]";
echo "<br> Jumlah buah: " . count($ar_buah);
// CETAK SELURUH  BUAH.
echo "<ol>";
foreach($ar_buah as $buah){
    echo "<li>$buah</li>";
}
echo "</ol>";
// cara menmbahkan data array.
$ar_buah[]= "Durian";
// cara hapus data array berdasarkan indeksnya.
unset($ar_buah[1]);
// ubah buah index ke dua menjadi manggis.
$ar_buah[2] = "Manggis";
// mencetak 3 poin diatas.
echo "<ul>";
foreach ($ar_buah as $k => $v) {
    echo "<li>Buah index ke - $k adalah $v</li>"; # code...
}
echo "</ul>";

?>