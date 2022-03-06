<?php
// Meminta request yang diinput
$proses= $_POST['proses'];
$nama_siswa = $_POST['nama'];
$mata_kuliah = $_POST['matkul'];
$uts = $_POST['nilai_uts'];
$uas =  $_POST['nilai_uas'];
$tugas = $_POST['nilai_tugas'];
$total = $uts + $uas + $tugas;
$alphabet = $total/3;
if ($alphabet <= 55) {
    $lulus = "Anda Tidak Lulus";
}else{
    $lulus = "Anda Lulus";
}
if ($alphabet >= 85) {
    $grade = "A";
} elseif($alphabet >= 70){
    $grade = "B";
}elseif($alphabet >= 56){
    $grade = "C";
}elseif($alphabet >= 36){
    $grade = "D";
}elseif($alphabet >= 10){
    $grade = "E";
}else{
    $grade = "I(Tidak Ada Nilai)";
}

// Mengambil data yang telah diinput
echo "Nama : $nama_siswa";
echo "<br>Mata Kuliah : $mata_kuliah";
echo "<br>Nilai UTS : $uts";
echo "<br>Nilai UAS : $uas";
echo "<br>Nilai Tugas : $tugas";
echo "<br>Data telah di $proses";
echo "<br>Grade : $grade";
echo "<br>Keterangan $lulus";
?>