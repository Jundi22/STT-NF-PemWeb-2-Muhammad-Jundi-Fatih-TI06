<?php
require_once "BMI.php";
error_reporting(0);
$pasien = array(
    1 => array(1, "2022-01-10", "P001", "Ahmad", "Pria", 69.8, 169, 24.7, "Kelebihan Berat Badan"),
        array(2, "2022-01-10", "P002", "Rina", "Wanita", 55.3, 165, 20.3, "Sehat (Ideal)"),
        array(3, "2022-01-11", "P003", "Luthfi", "Pria", 45.2, 171, 15.4, "Kekurangan Berat Badan")
    );

$nama = $_POST['name'];
$tmpt_lahir = $_POST['location'];
$jenis_kelamin = $_POST['gender'];
$tgl_lahir = $_POST['tanggalLahir'];
$berat_badan = $_POST['weight'];
$tinggi_badan = $_POST['height'];
$email = $_POST['email'];

$psn_baru = new BmiPasien(count($pasien) + 1, $tanggal, $nama, $tmpt_lahir, $tgl_lahir, $jenis_kelamin, $email, $berat_badan, $tinggi_badan);
$psn_baru->bmi = $psn_baru->hasilBMI();
array_push($pasien, array(
$psn_baru->id, 
$psn_baru->tanggal, 
$psn_baru->kode, 
$psn_baru->nama, 
$psn_baru->jenis_kelamin, 
$psn_baru->berat_badan,
$psn_baru->tinggi_badan, 
$psn_baru->bmi, 
$psn_baru->nilai($psn_baru->bmi)));
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BMI INPUT</title>
    <!-- CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
</head>
<body>
    <h1 class="text-center">Data Pasien</h1>
    <table class="container table table-striped table-bordered text-center">
        <thead class="bg-warning">
        </div>
            <tr>
                <th>No</th>
                <th>Tanggal Periksa</th>
                <th>Kode Pasien</th>
                <th>Nama Pasien</th>
                <th>Gender</th>
                <th>Berat Badan (Kg)</th>
                <th>Tinggi Badan (Cm)</th>
                <th>Nilai BMI</th>
                <th>Status BMI</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach($pasien as $obj => $val){
                    echo "<tr>";
                        echo "<td>".$val[0]."</td>";
                        echo "<td>".$val[1]."</td>";
                        echo "<td>".$val[2]."</td>";
                        echo "<td>".$val[3]."</td>";
                        echo "<td>".$val[4]."</td>";
                        echo "<td>".$val[5]."</td>";
                        echo "<td>".$val[6]."</td>";
                        echo "<td>".$val[7]."</td>";
                        echo "<td>".$val[8]."</td>";
                    echo "</tr>";
                }
            ?>
        </tbody>
    </table>
</body>
</html>