<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Matakuliah</title>
</head>
<body>
    <h3 class="col-md-12">Detail Matakuliah</h3>
    <div class="col-md-12">
    <table style="text-align: center;" border="1" class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>SKS</th>
                <th>Kode</th>
                <th>Dosen</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $matkul -> id ?></td>
                <td><?php echo $matkul -> nama ?></td> 
                <td><?php echo $matkul -> sks ?></td>              
                <td><?php echo $matkul -> kode ?></td>
                <td><?php echo $matkul -> dosen ?></td>
            </tr>
        </tbody>
    </table>
    </div> 
</body>
</html>