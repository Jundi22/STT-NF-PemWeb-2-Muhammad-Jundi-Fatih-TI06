<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dosen</title>
    <script>
        function hapusDosen(pesan){
            if (confirm(pesan)) {
                return true;
            } else {
                return false;
            }
        }
    </script>
</head>
<?php
$username = $this->session->userdata('username');
if ($username){
    echo "<h2>Selamat Datang $username</h2>";
}
?>
<body>
<h3 class="col-md-12">Data Dosen</h3>
<div class="col-md-12">
    <table style="text-align: center;" border="1" class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Gender</th>
                <th>Tempat Lahir</th>
                <th>Tanggal Lahir</th>
                <th>NIDN</th>
                <th>Pendidikan</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $nomor = 1;
            foreach ($dosen as $dsn) {
            ?>
            <tr>
                <td><?php echo $nomor ?></td>
                <td><?php echo $dsn -> nama ?></td>
                <td><?php echo $dsn -> gender ?></td>
                <td><?php echo $dsn -> tmp_lahir ?></td>
                <td><?php echo $dsn -> tgl_lahir ?></td>
                <td><?php echo $dsn -> nidn ?></td>
                <td><?php echo $dsn -> pendidikan ?></td>
                <td>
                    <a href="<?php echo base_url("index.php/dosen/detail_dosen/$dsn->id")?>"
                        class="btn btn-primary" >Detail <br>
                    </a>
                    &nbsp;
                    <a href= <?php echo base_url("index.php/dosen/edit_dosen/$dsn->id") ?> 
                        class="btn btn-success" >Edit <br>
                    </a>
                    &nbsp;
                    <a href= <?php echo base_url("index.php/dosen/delete_dosen/$dsn->id") ?> 
                        class="btn btn-danger"
                        onclick="return hapusDosen('Anda yakin ingin menghapus Dosen yang bernama <?php echo $dsn->nama ?>?')">Hapus <br>
                    </a>
                </td>
            </tr>
            <?php
                $nomor++;
                }
            ?>            
        </tbody>
    </table>
        <a href= <?php echo base_url("index.php/dosen/form_dosen") ?> class="btn btn-primary" >Tambah
        </a>
</div>
</body>
</html>