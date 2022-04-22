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
            <h1>Pertemuan 4</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#codelingkaran"class="text-dark">Code Class Lingkaran</a></li>
              <li class="breadcrumb-item"><a href="#manusia"class="text-dark">Class Manusia</a></li>
              <li class="breadcrumb-item"><a href="#nilai"class="text-dark">Code Class Nilai Mahasiswa</a></li>
              <li class="breadcrumb-item"><a href="#lingkaran"class="text-dark">Data Lingkaran</a></li>
              <li class="breadcrumb-item"><a href="#form"class="text-dark">Form Nilai</a></li>
              <li class="breadcrumb-item"><a href="#persegi"class="text-dark">Class Persegi Panjang</a></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content"id="codelingkaran">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- Default box -->
            <div class="card">
              <div class="card-header bg-primary">
                <h3 class="card-title">Code Class Lingkaran</h3>

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
                < ?php <br>
                //buat class lingkaran
                class Lingkaran{ <br>
                    //buat property <br> 
                    private $jari; <br>
                    const PHI = 3.14; <br>
            
                    //method atau function nya <br>
                    function __construct($r){ <br> 
                    $this -> jari = $r; <br>
                    } <br>
                    //method luas lingkaran <br>
                    function getluas(){ <br>
                        return self::PHI * $this -> jari * $this -> jari; <br>
                    } <br>

                    //method keliling <br>
                    function getkeliling(){ <br>
                        return 2 * self::PHI * $this -> jari; <br>
                    } <br>
                } <br>

                ? >
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div>
    </section>
    <section class="content"id="manusia">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- Default box -->
            <div class="card">
              <div class="card-header bg-primary">
                <h3 class="card-title">Class Manusia</h3>

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
                <?php
                //membuat class
                class Manusia{
                    //buat property
                    var $nama;
                    var $warna;

                    //buat method atau function
                    function tampilkan_nama(){
                        return "Nama saya adalah Jundi";
                    }
                    function warna_kulit(){
                        return "<br>Kulit saya coklat";
                    }
                }
                //buat object
                $manusia = new Manusia();

                echo "<hr>";
                echo $manusia -> tampilkan_nama();
                echo $manusia -> warna_kulit();

                ?>
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
                <h3 class="card-title">Code Class Nilai Mahasiswa</h3>

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
                < ?php
                <br>//buat class nilai mahasiswa
                <br>class NilaiMahasiswa{
                    <br>//buat property
                    <br>public $nim;
                    <br>public $matkul;
                    <br>public $nilai;<br>

                    <br>//buat method atau function
                    <br>function __construct($nim,$matkul,$nilai){
                        <br>//fungsi this untuk memanggil property lain atau diluar function
                        <br>$this->nim = $nim;
                        <br>r>$this->matkul = $matkul;
                        <br>$this->nilai = $nilai;
                    <br>}
                    <br>function hitungNilai(){
                        <br>return $this->nilai;
                    }<br><br>

                    function kelulusan($keterangan){
                        <br>if($keterangan >= 55){
                            <br>return "Anda Lulus";
                        <br>}else{
                            <br>return "Anda Tidak Lulus";
                        <br>}
                    <br>}<br><br>

                    function grade($keterangan){
                        <br>if($keterangan >= 85 && $keterangan >= 100){
                            <br>return "A";
                        <br>}elseif ($keterangan >= 70 && $keterangan <= 84) {
                            <br>return "B";
                        <br>}elseif ($keterangan >= 56 && $keterangan <= 69) {
                            <br>return "C";
                       <br>}elseif ($keterangan >= 36 && $keterangan <= 55) {
                            <br>return "D";
                        <br>}elseif ($keterangan >= 10 && $keterangan <= 35) {
                            <br>return "E";
                        <br>}else{
                            <br>return "I";
                        <br>}
                    <br>}
                <br>}
                <br>? >
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div>
    </section>
    <section class="content"id="lingkaran">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- Default box -->
            <div class="card">
              <div class="card-header bg-primary">
                <h3 class="card-title">Data Lingkaran</h3>

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
                <?php
                //memanggil file class lingkaran.php
                require_once "PERTEMUAN4/class_lingkaran.php";

                echo "Nilai PHI adalah ".Lingkaran::PHI;
                $lingkar1 = new Lingkaran(10);
                $lingkar2 = new Lingkaran(4);
                echo "<br>";

                //hitung luas lingkaran
                echo "<br>Luas lingkaran 1 adalah ". $lingkar1 ->getluas();
                echo "<br>Luas lingkaran 2 adalah ". $lingkar2 ->getluas();
                echo "<br>";

                //hitung keliling
                echo "<br>keliling lingkaran 1 adalah ". $lingkar1 ->getkeliling();
                echo "<br>keliling lingkaran 2 adalah ". $lingkar2 ->getkeliling();
                ?>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div>
    </section>
    <section class="content"id="form">
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
                <div class="container">
                    <h2 style="text-align:center;">FORM NILAI SISWA</h2>
                    <hr>
                    <form method="POST" action="Pertemuan4.php">
                        <div class="form-group row">
                            <label for="nim" class="col-4 col-form-label">NIM</label> 
                            <div class="col-8">
                            <input id="nim" name="nim" placeholder="Masukkan NIM Anda" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="matkul" class="col-4 col-form-label">Mata Kuliah</label> 
                            <div class="col-8">
                            <select id="matkul" name="matkul" class="custom-select">
                                <option value="DDP">Dasar Dasar Pemrograman</option>
                                <option value="PemWeb">Pemrograman Web</option>
                                <option value="BasDat">Basis Data</option>
                            </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="nilai" class="col-4 col-form-label">Nilai</label> 
                            <div class="col-8">
                            <input id="nilai" name="nilai" placeholder="Masukkan Nilai Anda" type="text" class="form-control">
                            </div>
                        </div> 
                        <div class="form-group row">
                            <div class="offset-4 col-8">
                            <button name="submit" type="submit" value="simpan" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                    <?php
                    require_once "PERTEMUAN4/class_nilaiMahasiswa.php";
                    if($_POST){
                        $ns = new NilaiMahasiswa($_POST['nim'],$_POST['matkul'],$_POST['nilai']);
                        $keterangan = $ns->hitungNilai();
                        $hasil = $ns->kelulusan($keterangan);
                        $hasil2 = $ns->grade($keterangan);
                        echo "NIM :". $ns->nim;
                        echo "<br>Mata Kuliah :". $ns->matkul;
                        echo "<br>Nilai :".$ns->nilai;
                        echo "<br>Status :".$ns->kelulusan($keterangan);
                        echo "<br>Grade :".$ns->grade($keterangan);
                    }
                    ?>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div>
    </section>
    <section class="content"id="persegi">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- Default box -->
            <div class="card">
              <div class="card-header bg-primary">
                <h3 class="card-title">Class Persegi Panjang</h3>

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
                <?php
                //luas = p * l
                //keliling = 2 * (p+l)
                class PersegiPanjang{
                    private $panjang;
                    private $lebar;

                    function getpanjang($panjang){
                        return $this->panjang=$panjang;
                    }

                    function getlebar($lebar){
                        return $this ->lebar=$lebar;
                    }

                    function getluas(){
                        return $this->panjang * $this->lebar;
                    }

                    function getkeliling(){
                        return 2 * ($this->panjang + $this->lebar);
                    }
                }
                //require_once "class_persegiPanjang.php";
                $persegi = new PersegiPanjang();
                echo "<br>";

                echo "Panjang Persegi Panjang: ". $persegi->getpanjang(15);
                echo "<br>Lebar Persegi Panjang: " . $persegi->getlebar(20);
                echo "<br>"; 
                echo "<br>Luas Persegi Panjang : ". $persegi ->getluas();
                echo "<br>Keliling Persegi Panjang : ". $persegi ->getkeliling();

                ?>
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