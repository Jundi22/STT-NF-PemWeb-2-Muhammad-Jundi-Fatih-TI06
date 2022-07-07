<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Form Input Perawatan mobil</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?=base_url('index.php/perawatan')?>">Data Perawatan Mobil</a></li>
              <li class="breadcrumb-item active">Form Input Perawatan Mobil</li>
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
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <?php echo form_open("perawatan/save") ?>
        <div class="form-group row">
                <label for="tanggal" class="col-4 col-form-label">Tanggal</label> 
                <div class="col-8">
                <div class="input-group">
                    <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fa fa-calendar"></i>
                    </div>
                    </div> 
                    <input id="tanggal" name="tanggal" type="date" class="form-control" required="required">
                </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="biaya" class="col-4 col-form-label">Biaya :</label> 
                <div class="col-8">
                <div class="input-group">
                    <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fa fa-money"></i>
                    </div>
                    </div> 
                    <input id="biaya" name="biaya" placeholder="Masukkan Biaya" type="text" class="form-control">
                </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="km_mobil" class="col-4 col-form-label">Km Mobil :</label> 
                <div class="col-8">
                <div class="input-group">
                    <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fa fa-dashboard"></i>
                    </div>
                    </div> 
                    <input id="km_mobil" name="km_mobil" type="text" class="form-control">
                </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="deskripsi" class="col-4 col-form-label">Deskripsi :</label> 
                <div class="col-8">
                <textarea id="deskripsi" name="deskripsi" cols="40" rows="3" class="form-control"></textarea>
                </div>
            </div>
            <div class="form-group row">
                <label for="mobil_id" class="col-4 col-form-label">Id Mobil :</label> 
                <div class="col-8">
                <div class="input-group">
                    <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fa fa-qrcode"></i>
                    </div>
                    </div> 
                    <select id="mobil_id" name="mobil_id" class="form_control">
                            <?php include "config.php"; 
                            $result = mysqli_query($connect, "SELECT * FROM mobil");
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
                <label for="jenis_perawatan_id" class="col-4 col-form-label">Id Jenis Perawatan :</label> 
                <div class="col-8">
                <div class="input-group">
                    <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fa fa-qrcode"></i>
                    </div>
                    </div> 
                    <select id="jenis_perawatan_id" name="jenis_perawatan_id" class="form_control">
                            <?php include "config.php"; 
                            $result = mysqli_query($connect, "SELECT * FROM jenis_perawatan");
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
                <div class="offset-4 col-8">
                <button name="submit" type="submit" class="btn btn-success">Kirim</button>
                </div>
            </div>
        <?php echo form_close() ?>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          Perawatan Mobil
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->