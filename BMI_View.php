<?php
include_once "header.php";
include_once "sidebar.php";
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Proyek 1 | BMI</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- Default box -->
            <div class="card">
              <div class="card-header bg-primary">
                <h3 class="card-title">Body Mass Index</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
              <h1 class="text-center">KLINIK BMI</h1>
                <div class="card m-2 col-0 shadow">
                  <div class="container card-body">
                  <form  method="POST" action="BMI/BMIPasien.php">
                  <div class="form-group row">
                    <label for="name" class="col-4 col-form-label">Nama Lengkap :</label> 
                    <div class="col-8">
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <div class="input-group-text">
                            <i class="bi bi-person-fill"></i>
                          </div>
                        </div> 
                        <input id="name" name="name" placeholder="Masukkan Nama Anda" type="text" class="form-control" required="required">
                      </div>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="lokasi" class="col-4 col-form-label">Tempat Lahir :</label> 
                    <div class="col-8">
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <div class="input-group-text">
                            <i class="bi bi-geo-alt"></i>
                          </div>
                        </div> 
                        <input id="location" name="location" placeholder="Masukkan Tempat Lahir Anda" type="text" class="form-control" required="required">
                      </div>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="date" class="col-4 col-form-label">Tanggal Lahir :</label> 
                    <div class="col-8">
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <div class="input-group-text">
                            <i class="fa fa-calendar"></i>
                          </div>
                        </div> 
                        <input id="tanggalLahir" name="tanggalLahir" placeholder="Masukkan Tanggal Lahir Anda" type="date" class="form-control" required="required">
                      </div>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-4">Jenis Kelamin :</label> 
                    <div class="col-8">
                      <div class="custom-control custom-radio custom-control-inline">
                        <input name="gender" id="gender_0" type="radio" class="custom-control-input" value="Pria" required="required"> 
                        <label for="gender_0" class="custom-control-label">Pria</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input name="gender" id="gender_1" type="radio" class="custom-control-input" value="Wanita" required="required"> 
                        <label for="gender_1" class="custom-control-label">Wanita</label>
                      </div>
                    </div>
                  </div> 
                  <div class="form-group row">
                    <label for="weight" class="col-4 col-form-label">Berat Badan:</label> 
                    <div class="col-8">
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <div class="input-group-text">
                            <i class="fa fa-balance-scale"></i>
                          </div>
                        </div> 
                        <input id="weight" name="weight" placeholder="Masukkan Berat Badan Anda" type="number" class="form-control" required="required">
                      </div>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="height" class="col-4 col-form-label">Tinggi Badan :</label> 
                    <div class="col-8">
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <div class="input-group-text">
                            <i class="fa fa-bar-chart"></i>
                          </div>
                        </div> 
                        <input id="height" name="height" placeholder="Masukkan Tinggi Badan Anda" type="number" class="form-control" required="required">
                      </div>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="email" class="col-4 col-form-label">Email :</label> 
                    <div class="col-8">
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <div class="input-group-text">
                            <i class="fa fa-envelope-o"></i>
                          </div>
                        </div> 
                        <input id="email" name="email" placeholder="Masukkan Email Anda" type="email" class="form-control" required="required">
                      </div>
                    </div>
                  </div> 
                  <div class="form-group row">
                    <div class="offset-4 col-8">
                      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                    </div>
                  </div>
                  </form>
                  </div>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php
include_once "footer.php";
?>