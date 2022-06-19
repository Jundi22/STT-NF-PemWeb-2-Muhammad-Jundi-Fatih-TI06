<div class="container">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<h1>Form Input Mata Kuliah</h1>
<?php echo form_open("matakuliah/save_matakuliah") ?>
  <div class="form-group row">
    <label for="nama_matkul" class="col-4 col-form-label">Nama Mata Kuliah :</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-book"></i>
          </div>
        </div> 
        <input id="nama_matkul" name="nama_matkul" placeholder="Masukkan Nama Mata Kuliah Anda" type="text" class="form-control" required="required">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="sks" class="col-4 col-form-label">SKS :</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-pencil-square-o"></i>
          </div>
        </div> 
        <input id="sks" name="sks" placeholder="Masukkan SKS Anda" type="text" class="form-control" required="required">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="kode" class="col-4 col-form-label">Kode :</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-barcode"></i>
          </div>
        </div> 
        <input id="kode" name="kode" placeholder="Masukkan Kode Anda" type="text" class="form-control" required="required">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="dosen_id" class="col-4 col-form-label">ID Dosen</label> 
    <div class="col-8">
      <div class="input-group">
        <select class="form-control" id="dosen_id" name="dosen_id" >
          <?php 
          include "config.php";
          $result = mysqli_query($connect, "SELECT * FROM dosen");
          while ( $row= mysqli_fetch_array($result)) 
          {?>
          <option value="<?php echo $row[0]?>">
          <?php echo $row[0]?>
          </option>  
          <?php }?>
        </select>
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