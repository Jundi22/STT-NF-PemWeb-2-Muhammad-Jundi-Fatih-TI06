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
            <h1>Pertemuan 2</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#belanja"class="text-dark">Form Belanja</a></li>
              <li class="breadcrumb-item"><a href="#nilai"class="text-dark">Form Nilai</a></li>
              <li class="breadcrumb-item"><a href="#ifelse"class="text-dark">IF ELSE PHP</a></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content"id="belanja">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- Default box -->
            <div class="card">
              <div class="card-header bg-primary">
                <h3 class="card-title">Form Belanja</h3>

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
              <div style="border:1px solid; margin: 10px;">
              <div class="container-fluid">
                <div class="row justify-content-between">
                    <div class="col-md-9 pt-2">
                    <h3>BELANJA ONLINE</h3>
                    <hr>
                    <form method = "POST" action = "Pertemuan2.php">
                            <div class="form-group row pt-2">
                                <label for="cs" class="col-3 col-form-label">Customer</label> 
                                <div class="col-7">
                                <input id="cs" name="cs" placeholder="Nama Customer" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-3">Pilih Produk</label> 
                                <div class="col-8">
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input name="produk" id="produk_0" type="radio" class="custom-control-input" value="TV"> 
                                        <label for="produk_0" class="custom-control-label">TV</label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input name="produk" id="produk_1" type="radio" class="custom-control-input" value="Kulkas"> 
                                        <label for="produk_1" class="custom-control-label">Kulkas</label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input name="produk" id="produk_2" type="radio" class="custom-control-input" value="Mesin Cuci"> 
                                        <label for="produk_2" class="custom-control-label">Mesin Cuci</label>
                                    </div>
                                </div>
                            </div> 
                            <div class="form-group row">
                                <label for="Jumlah" class="col-3 col-form-label">Jumlah</label> 
                                <div class="col-4">
                                <input id="Jumlah" name="Jumlah" type="text" class="form-control">
                                </div>
                            </div> 
                            <div class="form-group row">
                                <div class="offset-4 col-3">
                                <button name="submit" type="submit" class="btn btn-success">Kirim</button>
                                </div>
                            </div>
                    </form>
                    </div>
                    <div class="col-md-3 ">
                    <ul class="list-group"id="list">
                        <li class="list-group-item active" aria-current="true">Daftar Harga</li>
                        <li class="list-group-item">TV : 4.200.000</li>
                        <li class="list-group-item">Kulkas : 3.100.000</li>
                        <li class="list-group-item">Mesin Cuci : 3.800.000</li>
                        <li class="list-group-item active" aria-current="true">Harga dapat berubah setiap saat.</li>
                    </ul>
                    </div>
                  <div>
                  <hr>
                  <div class="row justify-content-between"style="margin:2px;" >
                    <div class="col-md-4 pb-1">
                    <?php
                    $nama = $_POST['cs'];
                    $produk = $_POST['produk'];
                    $jumlah = $_POST['Jumlah'];

                    if ($produk == "TV") {
                        $total = $jumlah * 4200000;
                    }elseif($produk == "Kulkas"){
                        $total = $jumlah * 3100000;
                    }elseif($produk == "Mesin Cuci"){
                        $total = $jumlah * 3800000;
                    }else{
                        0 ;
                    }
                    
                    echo "Nama Customer : $nama";
                    echo "<br>Produk Pilihan : $produk";
                    echo "<br>Jumlah Beli : $jumlah";
                    echo "<br>Harga : Rp. " . number_format($total) . ".-"; 
                    ?>
                    </div>
                  </div>
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
    <section class="content"id="nilai">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- Default box -->
            <div class="card">
              <div class="card-header bg-primary">
                <h3 class="card-title">Form Nilai</h3>
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
              <h2 style="text-align:center">Form Nilai</h2>
              <form method="POST" action="Pertemuan2.php">
              <div class="container">
                <div class="form-group row">
                  <label for="text" class="col-4 col-form-label">Nama</label> 
                  <div class="col-8">
                    <input id="text" name="nama" type="text" class="form-control">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="select" class="col-4 col-form-label">Mata Kuliah</label> 
                  <div class="col-8">
                    <select id="select" name="matkul" class="custom-select">
                      <option value="DDP">Dasar Pemrograman</option>
                      <option value="WEB">Pemrograman Web</option>
                      <option value="BASDAT">Basis Data</option>
                    </select>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="nilai_uts" class="col-4 col-form-label">Nilai UTS</label> 
                  <div class="col-8">
                    <input id="nilai-uts" name="nilai_uts" placeholder="Masukkan Nilai UTS" type="text" class="form-control">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="nilai-uas" class="col-4 col-form-label">Nilai UAS</label> 
                  <div class="col-8">
                    <input id="nilai_uas" name="nilai_uas" placeholder="Masukkan Nilai UAS" type="text" class="form-control">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="nilai_tugas" class="col-4 col-form-label">Nilai Tugas</label> 
                  <div class="col-8">
                    <input id="nilai_tugas" name="nilai_tugas" placeholder="Masukkan Nilai tugas" type="text" class="form-control">
                  </div>
                </div> 
                <div class="form-group row">
                  <div class="offset-4 col-8">
                    <button name="proses" value="SIMPAN" type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </div>
              </div>
              </form>
              <?php
              // Meminta request yang diinput
              $proses= $_POST['proses'];
              $nama_siswa = $_POST['nama'];
              $mata_kuliah = $_POST['matkul'];
              $uts = $_POST['nilai_uts'];
              $uas =  $_POST['nilai_uas'];
              $tugas = $_POST['nilai_tugas'];
              $total = $uts + $uas + $tugas;
              $alphabet = $total/3;
              if ($alphabet <= 55) {
                  $lulus = "Anda Tidak Lulus";
              }else{
                  $lulus = "Anda Lulus";
              }
              if ($alphabet >= 85) {
                  $grade = "A";
              } elseif($alphabet >= 70){
                  $grade = "B";
              }elseif($alphabet >= 56){
                  $grade = "C";
              }elseif($alphabet >= 36){
                  $grade = "D";
              }elseif($alphabet >= 10){
                  $grade = "E";
              }else{
                  $grade = "- (Tolong Masukkan Nilai)";
              }

              // Mengambil data yang telah diinput
              echo "Nama : $nama_siswa";
              echo "<br>Mata Kuliah : $mata_kuliah";
              echo "<br>Nilai UTS : $uts";
              echo "<br>Nilai UAS : $uas";
              echo "<br>Nilai Tugas : $tugas";
              echo "<br>Data telah di $proses";
              echo "<br>Grade : $grade";
              echo "<br>Keterangan $lulus";
              ?>
            </div>
            <!-- /.card-body -->
          </div>
        </div>
      </div>
    </section>
    <section class="content"id="ifelse">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- Default box -->
            <div class="card">
              <div class="card-header bg-primary">
                <h3 class="card-title">Code IF ELSE PHP</h3>

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
              <p class="fw-bold">
              < ?php
              $teman = "Zuhdi";
              <br>
              if ($teman == "Zuhdi") {
                  <br> echo "Zuhdi Adalah Teman Saya";
              <br>} else{ <br>
                  echo "Zuhdi Bukan teman saya";
              }
              ? >
              </p>
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