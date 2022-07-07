<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Pengaturan Profile</h1>
          </div>
          <div class="col-sm-6">
            <!-- <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Blank Page</li>
            </ol> -->
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
        <?= form_open('admin/update',['action'=>'POST']);?>
        <div class="container">

          <div class="form-group row">
            <label for="username" class="col-4">Username : </label>
              <div class="col-8">
                <div class="input-group">
                      <div class="input-group-prepend">
                      <div class="input-group-text">
                          <i class="fa fa-vcard-o"></i>
                      </div>
                      </div> 
                <input type="text" class="form-control" name="username" value="<?= $admin_data->username ?>" required>
                </div>
              </div>
          </div>
          <div class="form-group row">
            <label for="email" class="col-4">Email : </label>
              <div class="col-8">
                <div class="input-group">
                      <div class="input-group-prepend">
                      <div class="input-group-text">
                          <i class="fa fa-email"></i>
                      </div>
                      </div> 
                      <input type="email" class="form-control" name="email" value="<?= $admin_data->email ?>" required>
                </div>
              </div>
          </div>
          <div class="form-group row">
          <label for="password" class="col-4">Password</label>
              <div class="col-8">
                <div class="input-group">
                      <div class="input-group-prepend">
                      <div class="input-group-text">
                          <i class="fa fa-qrcode"></i>
                      </div>
                      </div> 
                      <input type="password" class="form-control" name="password">
                </div>
              </div>
          </div>
          <div class="form-group mt-3">
            <button type="submit" class="btn btn-success">Simpan</button>
          </div>
            </div>
        <?= form_close();?>
        </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->