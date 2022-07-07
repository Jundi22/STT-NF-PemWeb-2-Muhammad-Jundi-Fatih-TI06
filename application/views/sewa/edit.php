<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Form Edit Sewa</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url("index.php/sewa") ?>">Data Sewa</a></li>
              <li class="breadcrumb-item active">Form Edit Sewa</li>
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
        <h1>Form Edit Sewa</h1>
        <?php echo form_open("sewa/save") ?>
        
        <div class="form-group row">
            <label for="tanggal_mulai" class="col-4 col-form-label">Tanggal Mulai :</label> 
            <div class="col-8">
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <i class="fa fa-calendar"></i>
                  </div>
                </div> 
                <input id="tanggal_mulai" name="tanggal_mulai" type="date" class="form-control"> 
              </div>
            </div>
          </div>
          <div class="form-group row">
            <label for="tanggal_akhir" class="col-4 col-form-label">Tanggal Akhir :</label> 
            <div class="col-8">
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <i class="fa fa-calendar"></i>
                  </div>
                </div> 
                <input id="tanggal_akhir" name="tanggal_akhir" type="date" class="form-control"> 
              </div>
            </div>
          </div>
          <div class="form-group row">
            <label for="tujuan" class="col-4 col-form-label">Tujuan :</label> 
            <div class="col-8">
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <i class="fa fa-minus-circle"></i>
                  </div>
                </div> 
                <input id="tujuan" name="tujuan" placeholder="Masukan Tujuan Anda" type="text" class="form-control">
              </div>
            </div>
          </div>
          <div class="form-group row">
            <label for="noktp" class="col-4 col-form-label">No Identitas (KTP/SIM) :</label> 
            <div class="col-8">
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <i class="fa fa-address-book"></i>
                  </div>
                </div> 
                <input id="noktp" name="noktp" placeholder="Masukan Nomor Identitas Anda" type="text" class="form-control">
              </div>
            </div>
          </div>
          <div class="form-group row">
                    <label for="users_id" class="col-4 col-form-label">Users ID :</label> 
                    <div class="col-8">
                    <div class="input-group">
                        <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="fa fa-circle-o-notch"></i>
                        </div>
                        </div> 
                        <select id="users_id" name="users_id" class="form_control">
                            <?php include "config.php"; 
                            $result = mysqli_query($connect, "SELECT * FROM users");
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
                    <label for="mobil_id" class="col-4 col-form-label">Mobil ID :</label> 
                    <div class="col-8">
                    <div class="input-group">
                        <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="fa fa-circle-o-notch"></i>
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
            <div class="offset-4 col-8">
              <button name="submit" type="submit" class="btn btn-success">Kirim</button>
            </div>
          </div>
        
        </div>
        <?php echo form_close() ?>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          Edit Sewa
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
