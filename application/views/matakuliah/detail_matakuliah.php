<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Mata Kuliah</title>
</head>
<body>
    <h3 class="col-md-12">Detail Mata Kuliah</h3>
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
                <td><?php echo $matakuliah -> id ?></td>
                <td><?php echo $matakuliah -> nama ?></td> 
                <td><?php echo $matakuliah -> sks ?></td>              
                <td><?php echo $matakuliah -> kode ?></td>
                <td><?php echo $matakuliah -> dosen ?></td>
            </tr>
        </tbody>
    </table>
    </div> 
</body>
</html>