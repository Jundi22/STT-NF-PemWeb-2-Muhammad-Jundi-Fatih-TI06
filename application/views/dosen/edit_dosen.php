<div class="container">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<h1>Form Edit Dosen</h1>
<?php echo form_open("dosen/save_dosen") ?>
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama Lengkap :</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-user-circle"></i>
          </div>
        </div> 
        <input id="nama" name="nama" placeholder="Masukkan Nama Lengkap Anda" type="text" value="<?php echo $obj_dosen->nama?>" class="form-control" required="required">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Jenis Kelamin :</label> 
    <div class="col-8">
      <div class="input-group">
          <div class="input-group-prepend">
            <div class="input-group-text">
              <i class="fa fa-transgender"></i>
            </div>
          </div> 
          <input id="gender" name="gender" placeholder="Masukkan Jenis Kelamin Anda" type="text" value="<?php echo $obj_dosen->gender?>" class="form-control" required="required">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="tmp_lahir" class="col-4 col-form-label">Tempat Lahir :</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-location-arrow"></i>
          </div>
        </div> 
        <input id="tmp_lahir" name="tmp_lahir" placeholder="Masukkan Tempat Lahir Anda" type="text" value="<?php echo $obj_dosen->tmp_lahir?>" class="form-control" required="required">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="tgl_lahir" class="col-4 col-form-label">Tanggal Lahir :</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-calendar"></i>
          </div>
        </div> 
        <input id="tgl_lahir" name="tgl_lahir" type="date" value="<?php echo $obj_dosen->tgl_lahir?>" class="form-control" required="required">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="nidn" class="col-4 col-form-label">NIDN :</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-id-card-o"></i>
          </div>
        </div> 
        <input id="nidn" name="nidn" placeholder="Masukkan NIDN Anda" type="text" value="<?php echo $obj_dosen->nidn?>" class="form-control" required="required">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="pendidikan" class="col-4 col-form-label">Pendidikan :</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-graduation-cap"></i>
          </div>
        </div> 
        <input id="pendidikan" name="pendidikan" placeholder="Masukkan Pendidikan Anda" type="text" value="<?php echo $obj_dosen->pendidikan?>" class="form-control" required="required">
      </div>
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
  <?php echo form_close() ?>
</div>