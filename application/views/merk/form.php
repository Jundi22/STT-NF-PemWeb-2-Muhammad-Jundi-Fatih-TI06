<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Form Input Merk</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url("index.php/merk") ?>">Data Merk</a></li>
              <li class="breadcrumb-item active">Form Input Merk</li>
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
        <?php echo form_open("merk/save") ?>
                <div class="form-group row">
                    <label class="col-4">Nama Merk :</label> 
                    <div class="col-8">
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="nama" id="nama_0" type="radio" class="custom-control-input" value="toyota" required="required"> 
                        <label for="nama_0" class="custom-control-label">Toyota</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="nama" id="nama_1" type="radio" class="custom-control-input" value="mitsubishi" required="required"> 
                        <label for="nama_1" class="custom-control-label">Mitsubishi</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="nama" id="nama_3" type="radio" class="custom-control-input" value="honda" required="required"> 
                        <label for="nama_3" class="custom-control-label">Honda</label>
                    </div>
                    </div>
                </div>
                
            
                <div class="form-group row">
                    <label class="col-4">Produk :</label> 
                    <div class="col-8">
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="produk" id="produk_0" type="radio" class="custom-control-input" value="rush" required="required"> 
                        <label for="produk_0" class="custom-control-label">Toyota Rush</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="produk" id="produk_2" type="radio" class="custom-control-input" value="ertiga" required="required"> 
                        <label for="produk_2" class="custom-control-label">Toyota Alphard</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="produk" id="produk_1" type="radio" class="custom-control-input" value="xpander" required="required"> 
                        <label for="produk_1" class="custom-control-label">Mitsubishi Xpander</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="produk" id="produk_3" type="radio" class="custom-control-input" value="mobilio" required="required"> 
                        <label for="produk_3" class="custom-control-label">Honda Avanza</label>
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
                    <div class="offset-4 col-8">
                    <button name="submit" type="submit" class="btn btn-success">Kirim</button>
                    </div>
                </div>
                <?php echo form_close() ?>
        </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          Merk
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
