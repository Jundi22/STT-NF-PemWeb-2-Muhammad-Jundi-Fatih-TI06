<?php
// Meminta request yang diinput
$proses= $_POST['proses'];
$nama_siswa = $_POST['nama'];
$mata_kuliah = $_POST['matkul'];
$uts = $_POST['nilai_uts'];
$uas =  $_POST['nilai_uas'];
$tugas = $_POST['nilai_tugas'];
$total = $uts + $uas + $tugas;
$_nilai = $total/3;
$hasil_ujian = kelulusan($_nilai);
$peringkat = grade($_nilai); 

// Mengambil data yang telah diinput
echo "Nama : $nama_siswa";
echo "<br>Mata Kuliah : $mata_kuliah";
echo "<br>Nilai UTS : $uts";
echo "<br>Nilai UAS : $uas";
echo "<br>Nilai Tugas : $tugas";
echo "<br>Data telah di $proses";
echo "<br>Grade : $peringkat";
echo "<br>Keterangan $hasil_ujian";
?>