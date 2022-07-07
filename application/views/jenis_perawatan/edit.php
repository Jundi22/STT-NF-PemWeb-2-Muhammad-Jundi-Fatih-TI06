<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Form Edit Jenis Perawatan</h1>
          </div>
          <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?=base_url('index.php/jenis_perawatan')?>">Data Jenis Perawatan</a></li>
              <li class="breadcrumb-item active">Form Edit Jenis Perawatan</li>
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
        <?php echo form_open("jenis_perawatan/save") ?>
                <div class="form-group row">
                    <label for="nopol" class="col-4 col-form-label">Jenis Perawatan :</label> 
                    <div class="col-8">
                    <div class="input-group">
                        <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="fa fa-vcard-o"></i>
                        </div>
                        </div> 
                        <input id="nama" name="nama" value="<?php echo $obj_jenis->nama?>" placeholder="Masukkan Jenis Perawatan Kendaraan" type="text" required="required" class="form-control">
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
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            Jenis Perawatan
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
