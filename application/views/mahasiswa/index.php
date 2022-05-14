<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mahasiswa</title>
</head>
<body>
    <h1 style="text-align:center;">Table Mahasiswa</h1>
    <table border="1" cellspacing="3" cellpadding="3" style="text-align:center;"align="center">
        <thead style="background-color:khaki;">
            <tr>
                <th>Nomor</th>
                <th>ID</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>Gender</th>
                <th>IPK</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no=1;
            foreach ($mahasiswa as $mhs) {
            ?>
            <tr>
                <td><?php echo $no ?></td>
                <td><?php echo $mhs->id ?></td>
                <td><?php echo $mhs->nim?></td>
                <td><?php echo $mhs->nama?></td>
                <td><?php echo $mhs->gender?></td>
                <td><?php echo $mhs->ipk?></td>
                <td>
                    <a href="<?php echo base_url("index.php/mahasiswa/detail/$mhs->id") ?>">Detail</a>
                </td>
            </tr>
            <?php
            $no++;
            }
            ?>
        </tbody>
    </table>
</body>
</html>