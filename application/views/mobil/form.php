<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Form Input Mobil</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?=base_url('index.php/mobil')?>">Data Mobil</a></li>
              <li class="breadcrumb-item active">Form Input Mobil</li>
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
        <div class="container">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <?php echo form_open("mobil/save") ?>
        
        <div class="form-group row">
                    <label for="nopol" class="col-4 col-form-label">Plat Nomer :</label> 
                    <div class="col-8">
                    <div class="input-group">
                        <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="fa fa-vcard-o"></i>
                        </div>
                        </div> 
                        <input id="nopol" name="nopol" placeholder="Masukkan No Plat Kendaraan" type="text" required="required" class="form-control">
                    </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-4">Warna :</label> 
                    <div class="col-8">
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="warna" id="warna_0" type="radio" class="custom-control-input" value="Merah" required="required"> 
                        <label for="warna_0" class="custom-control-label">Merah</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="warna" id="warna_1" type="radio" class="custom-control-input" value="Hitam" required="required"> 
                        <label for="warna_1" class="custom-control-label">Hitam</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="warna" id="warna_2" type="radio" class="custom-control-input" value="Biru" required="required"> 
                        <label for="warna_2" class="custom-control-label">Biru</label>
                    </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="biaya_sewa" class="col-4 col-form-label">Biaya Sewa :</label> 
                    <div class="col-8">
                    <div class="input-group">
                        <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="fa fa-money"></i>
                        </div>
                        </div> 
                        <input id="biaya_sewa" name="biaya_sewa" type="text" class="form-control">
                    </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="deskripsi" class="col-4 col-form-label">Deskripsi :</label> 
                    <div class="col-8">
                    <div class="input-group">
                        <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="fa fa-align-justify"></i>
                        </div>
                        </div> 
                        <input id="deskripsi" name="deskripsi" placeholder="Masukkan Deskripsi" type="text" class="form-control" required="required">
                    </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="cc" class="col-4 col-form-label">Cubical Centimeter :</label> 
                    <div class="col-8">
                    <div class="input-group">
                        <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="fa fa-dashboard"></i>
                        </div>
                        </div> 
                        <input id="cc" name="cc" placeholder="Masukkan CC" type="text" class="form-control">
                    </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="merk_id" class="col-4 col-form-label">Id Merk</label> 
                    <div class="col-8">
                    <div class="input-group">
                        <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="fa fa-circle-o-notch"></i>
                        </div>
                        </div> 
                        <select id="merk_id" name="merk_id" class="form_control">
                            <?php include "config.php"; 
                            $result = mysqli_query($connect, "SELECT * FROM merk");
                            while ($row = mysqli_fetch_array($result))
                            { ?>
                            <option value="<?php echo $row[0]?>">
                            <?php echo $row[0]?>
                            </option>
                            <?php } ?>
                        </select>
                    </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="tahun" class="col-4 col-form-label">Tahun :</label> 
                    <div class="col-8">
                    <div class="input-group">
                        <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="fa fa-dashboard"></i>
                        </div>
                        </div> 
                        <input id="tahun" name="tahun" placeholder="Masukkan Tahun" type="text" class="form-control">
                    </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="foto" class="col-4 col-form-label">Foto :</label> 
                    <div class="col-8">
                    <div class="input-group">
                        <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="fa fa-image"></i>
                        </div>
                        </div> 
                        <input id="foto" name="foto" placeholder="Masukkan Id Foto" type="text" class="form-control">
                      </div>
                      <b>Contoh : B6120BFB.png (Harus Format PNG)</b>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="offset-4 col-8">
                    <button name="submit" type="submit" class="btn btn-success">Kirim</button>
                    </div>
                </div>
                <?php echo form_close() ?>
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
  <!-- /.content-wrapper -->
