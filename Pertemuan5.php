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
            <h1>Pertemuan 5</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#bank" class="text-dark">Account Bank</a></li>
              <li class="breadcrumb-item"><a href="#dispenser" class="text-dark">Class Dispenser</a></li>
              <li class="breadcrumb-item"><a href="#fruit" class="text-dark">Class Fruit</a></li>
              <li class="breadcrumb-item"><a href="#buah" class="text-dark">Class Buah</a></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content" id="bank">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- Default box -->
            <div class="card">
              <div class="card-header bg-primary">
                <h3 class="card-title">Account Bank</h3>

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
                require_once "PERTEMUAN5/class_accountBank.php";

                $b1 = new akun('C001','Ahmad', number_format(6000000,0,".","."));
                $b2 = new akun('C002','Budi', number_format(5350000,0,".","."));
                $b3 = new akun('C003','Kurniawan',number_format(2500000,0,".","."));
                $bank = [$b1,$b2,$b3];
                ?>
                <table class="table">
                    <h1 class="text-center mt-3">Bank Jundi</h1>
                    <div class="container-fluid mb-3">
                        <div class="row">
                            <div class="col-md-5">
                            
                            <p class="fw-bold">Aktivitas :</p>
                        
                            <p class="lead">Ahmad nabung Rp. 1.000.000 <br>
                            Budi tarik uang Rp. 2.500.000</p>
                            </div>
                        </div>
                    </div>
                    <thead>
                        <tr>
                        <th scope="col">No</th>
                        <th scope="col">No Akun</th>
                        <th scope="col">Pemilik</th>
                        <th scope="col">Saldo</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $nomor=1;
                        foreach($bank as $bk){
                        ?>
                            <tr>
                                <td scope="row"><?=$nomor?></td>
                                <td><?=$bk->no_akun?></td>
                                <td><?=$bk->pemilik?></td>
                                <td><?=$bk->saldo?></td>
                            </tr>
                        <?php
                            $nomor++;
                        }
                        ?>
                    </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div>
    </section>
    <section class="content" id="dispenser">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- Default box -->
            <div class="card">
              <div class="card-header bg-primary">
                <h3 class="card-title">Class Dispenser</h3>

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
                class Dispenser{
                    protected $volume;
                    protected $hargaSegelas;
                    const volumeGelas = 250 . " ML";
                    public $namaMinuman;

                    public function set_volume($v){
                        return $this->volume = $v;
                    }
                    public function set_hargaSegelas($hs){
                        return $this->hargaSegelas = $hs;
                    }
                    public function pengurangan($vol){
                        $this->volume = $vol - self::volumeGelas;
                        echo "Hasil volume bernilai" ." ". $this->volume . " ML";
                    }
                }
                $air = new Dispenser();
                echo $air -> namaMinuman = "<p style='text-align:center;'>  Minuman Le Minerale<p/>";
                echo "<hr>";
                echo $air -> set_volume("Volumenya adalah 1000 ML");
                echo "<br>";
                echo $air -> set_hargaSegelas("Harga segelasnya adalah Rp.". number_format("3000",0,".","."));
                echo "<br>";
                echo "Jundi membeli air 1 gelas yang bervolume ". Dispenser::volumeGelas;
                echo "<br>";
                $air->pengurangan(1000);
                ?>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div>
    </section>
    <section class="content" id="fruit">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- Default box -->
            <div class="card">
              <div class="card-header bg-primary">
                <h3 class="card-title">Class Fruit</h3>

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
                class Fruit{
                    public $name;
                    public $warna;

                    public function __construct($name, $warna){
                        $this->name = $name;
                        $this->warna = $warna;
                    }
                    public function intro(){
                        echo "<br>Nama aku adalah {$this->name} dan warna aku adalah {$this->warna}";
                    }
                }
                class Strawberry extends Fruit{ //extends adalah keyword untuk inherite atau memasukkan class turunan dari class seblumnya.
                    public function pesan(){
                        echo "Aku adalah strawberry atau pisang?";
                    }
                }
                $buah = new Strawberry('strawberry','merah');
                $buah->pesan();
                $buah->intro();
                ?>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div>
    </section>
    <section class="content" id="buah">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- Default box -->
            <div class="card">
              <div class="card-header bg-primary">
                <h3 class="card-title">Class Buah</h3>
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
                class Buah{
                    //buat property
                    public $name;
                    protected $color;
                    private $berat;

                    //buat method untuk mencetak si color dan berat.
                    public function set_color($c){
                        return $this->color = $c;
                    }
                    public function set_berat($b){
                        return $this->berat = $b;
                    }
                }
                //cetak object
                $mangga = new Buah();
                echo $mangga->name = 'Mangga';
                echo"<br>";
                echo $mangga->set_color('hijau');
                echo"<br>";
                echo $mangga->set_berat(20).'kg';
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