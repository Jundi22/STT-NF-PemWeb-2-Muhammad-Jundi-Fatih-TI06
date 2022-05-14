<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matakuliah</title>
</head>
<body>
<h3 class="col md-12">Matakuliah</h3>
<div class="col-md-12">
    <table style="text-align: center;" border="1" class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>SKS</th>
                <th>Kode</th>
                <th>Dosen</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $nomor = 1;
            foreach ($matkul as $matkul) {
            ?>
            <tr>
                <td><?php echo $nomor ?></td>
                <td><?php echo $matkul -> nama ?></td>
                <td><?php echo $matkul -> sks ?></td>
                <td><?php echo $matkul -> kode ?></td>
                <td><?php echo $matkul -> dosen ?></td>
                <td>
                    <a href="<?php echo base_url("index.php/mahasiswa/detail_matakuliah/$matkul->id")?>">Detail</a>
                </td>
            </tr>
            <?php
            $nomor++;
            }
            ?>            
        </tbody>
    </table>
    </div>
</body>
</html>