<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Mobil</title>
</head>
<body>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Detail Mobil</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?=base_url('index.php/mobil')?>">Data Mobil</a></li>
              <li class="breadcrumb-item active">Detail Mobil</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header bg-danger">
          <h3 class="card-title"></h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus text-light"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times text-light"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
            <div class="col-md-12">
              <table style="text-align: center;" border="1" class="table">
                  <thead>
                      <tr>
                          <th>ID</th>
                          <th>Plat Nomor</th>
                          <th>Warna</th>
                          <th>Biaya Sewa</th>
                          <th>CC</th>
                          <th>Tahun</th>
                          <th>Deskripsi</th>
                          <th>Merk_id</th>
                          <th>Foto</th>
                      </tr>
                  </thead>
                  <tbody>
                      <tr>
                          <td><?php echo $car -> id ?></td>
                          <td><?php echo $car -> nopol ?></td>
                          <td><?php echo $car -> warna ?></td>               
                          <td><?php echo $car -> biaya_sewa ?></td>
                          <td><?php echo $car -> cc ?></td>
                          <td><?php echo $car -> tahun ?></td>
                          <td><?php echo $car -> deskripsi ?></td>
                          <td><?php echo $car -> merk_id ?></td>
                          <td><?php echo $car -> foto ?></td>
                      </tr>
                  </tbody>
              </table>
                  <div class="col-md-5 mb-3">
                    <div class="card">
                      <div class="card-body">
                        <div class="d-flex flex-column align-items-center text-center">
                          <img src="<?= base_url() ?>uploads/photo/<?=$car->id?>.png" width="200" alt="">
                            <div class="mt-5">
                              <h4><?=$car->nopol?></h4>
                                <p>Foto Mobil</p>
                                  <!-- <?php echo $error;?> -->
                                  <br>
                                    <a href="https://www.instagram.com/addina.ak/"><button class="btn btn-outline-primary">Instagram</button></a> 
                                    <?php echo form_open_multipart("mobil/upload"); ?>
                                    <input type="file" name="foto" size="300"/>
                                    <input type="hidden" name="idmobil" value="<?=$car->id?>"/>
                                    <input type="submit" value="Upload Foto" class="btn btn-outline-success"/>
                            </div>
                        </div>
                      </div>
                    </div>
                  </div>
            </div>
    </div> 
    <!-- /.card-body -->
    <div class="card-footer">
      Mobil
    </div>
    <!-- /.card-footer-->
  </div>
  <!-- /.card -->


    </section>
    <!-- /.content -->
  </div>
    
</body>
</html>