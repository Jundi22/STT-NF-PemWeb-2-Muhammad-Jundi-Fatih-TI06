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
                <th>NIM</th>
                <th>Nama</th>
                <th>Gender</th>
                <th>Tempat Lahir</th>
                <th>Tanggal Lahir</th>
                <th>IPK</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $siswa->id ?></td>
                <td><?php echo $siswa->nim?></td>
                <td><?php echo $siswa->nama?></td>
                <td><?php echo $siswa->gender?></td>
                <td><?php echo $siswa->tmp_lahir?></td>
                <td><?php echo $siswa->tgl_lahir?></td>
                <td><?php echo $siswa->ipk?></td>
            </tr>
        </tbody>
    </table>
</body>
</html>