<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Dosen</title>
</head>
<body>
    <h3 class="col-md-12">Detail Dosen</h3>
    <div class="col-md-12">
    <table style="text-align: center;" border="1" class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Gender</th>
                <th>Tempat Lahir</th>
                <th>Tanggal Lahir</th>
                <th>NIDN</th>
                <th>Pendidikan</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $dosen -> id ?></td>
                <td><?php echo $dosen -> nama ?></td> 
                <td><?php echo $dosen -> gender ?></td>              
                <td><?php echo $dosen -> tmp_lahir ?></td>
                <td><?php echo $dosen -> tgl_lahir ?></td>                
                <td><?php echo $dosen -> nidn ?></td>
                <td><?php echo $dosen -> pendidikan ?></td>
            </tr>
        </tbody>
    </table>
    <div class="col-md-5 mb-3">
        <div class="card">
            <div class="card-body">
                <div class="d-flex flex-column align-items-center text-center">
                    <img src="<?=base_url()?>upload_dosen/photos/<?=$dosen->id?>.png" width="300"/>
                    <div class="mt-4">
                        <h4><?php $dosen->nama?></h4>
                        <p>Foto Dosen</p>
                        <br>
                        <a href="https://www.instagram.com/jundi.fatih" target="_blank"><button class="btn btn-success">Instagram</button></a>
                        <?php 
                        echo form_open_multipart('dosen/upload_dosen');
                        ?>
                        <input type="file" name="foto" size="300"/>
                        <input type="hidden" name="iddosen" value="<?php echo $dosen->id?>">
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

<!-- Link Tugas Praktikum 11 Upload Foto Dosen di Git Bash
    https://github.com/Jundi22/STT-NF-PemWeb-2-Muhammad-Jundi-Fatih-TI06/tree/UploadFoto-Dosen/Mahasiswa-Praktikum11
-->