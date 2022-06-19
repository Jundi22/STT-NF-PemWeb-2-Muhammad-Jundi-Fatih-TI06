<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Mahasiswa</title>
</head>
<body>
    <h3 class="col-md-12">Detail Mahasiswa</h3>
    <div class="col-md-12">
    <table style="text-align: center;" border="1" class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>Gender</th>
                <th>Tempat Lahir</th>
                <th>Tanggal Lahir</th>
                <th>IPK</th>
                <th>Mata Kuliah Id</th>
                <th>Kelas Id</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $siswa -> id ?></td>
                <td><?php echo $siswa -> nim ?></td>
                <td><?php echo $siswa -> nama ?></td>               
                <td><?php echo $siswa -> tmp_lahir ?></td>
                <td><?php echo $siswa -> tgl_lahir ?></td>
                <td><?php echo $siswa -> gender ?></td>
                <td><?php echo $siswa -> ipk ?></td>
                <td><?php echo $siswa -> matakuliah_id ?></td>
                <td><?php echo $siswa -> kelas_id ?></td>
            </tr>
        </tbody>
    </table>
    <div class="col-md-5 mb-3">
        <div class="card">
            <div class="card-body">
                <div class="d-flex flex-column align-items-center text-center">
                <img src="<?=base_url()?>upload/photos/<?=$siswa->id?>.jpg" width="300"/>
                    <div class="mt-4">
                        <h4><?php $siswa->nama?></h4>
                        <p>Foto Mahasiswa</p>
                        <br>
                        <a href="https://www.instagram.com/jundi.fatih" target="_blank"><button class="btn btn-success">Instagram</button></a>
                        <?php 
                        echo form_open_multipart('mahasiswa/upload');
                        ?>
                        <input type="file" name="foto" size="300"/>
                        <input type="hidden" name="idmahasiswa" value="<?php echo $siswa->id ?>">
                        <br><br>
                        <input type="submit" value="Upload Foto" class="btn btn-primary"/>
                        </form>
                    </div>
                </div> 
            </div>
        </div>
    </div>  
    </div> 
</body>
</html>