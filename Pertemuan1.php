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
            <h1>Pertemuan 1</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#buah"class="text-dark">Array Buah</a></li>
              <li class="breadcrumb-item"><a href="#fungsi"class="text-dark">Array Fungsi</a></li>
              <li class="breadcrumb-item"><a href="#siswa"class="text-dark">Array Siswa</a></li>
              <li class="breadcrumb-item"><a href="#konstan"class="text-dark">Variabel Konstan</a></li>
              <li class="breadcrumb-item"><a href="#user"class="text-dark">Variabel User</a></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content"id="buah">

      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- Default box -->
            <div class="card">
              <div class="card-header bg-primary">
                <h3 class="card-title">Array Buah</h3>

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
                // membuat variable array.
                $ar_buah= ["Pepaya","Mangga","Pisang","Jambu"];
                // cetak array.
                echo "Ini adalah hasil data buah dalam array.";
                echo "<br> $ar_buah[2]";
                echo "<br> Jumlah buah: " . count($ar_buah);
                // CETAK SELURUH  BUAH.
                echo "<ol>";
                foreach($ar_buah as $buah){
                    echo "<li>$buah</li>";
                }
                echo "</ol>";
                // cara menmbahkan data array.
                $ar_buah[]= "Durian";
                // cara hapus data array berdasarkan indeksnya.
                unset($ar_buah[1]);
                // ubah buah index ke dua menjadi manggis.
                $ar_buah[2] = "Manggis";
                // mencetak 3 poin diatas.
                echo "<ul>";
                foreach ($ar_buah as $k => $v) {
                    echo "<li>Buah index ke - $k adalah $v</li>"; # code...
                }
                echo "</ul>";

                ?>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div>
    </section>
    <section class="content"id="fungsi">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- Default box -->
            <div class="card">
              <div class="card-header bg-primary">
                <h3 class="card-title">Array Fungsi</h3>

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
                $ar_buah = ["p"=>"Pepaya","a"=>"Apel","m"=>"Mangga","j"=>"Jambu"];
                echo "<ol>";
                foreach ($ar_buah as $buah => $v) {
                    echo "<li>$buah - $v</li>";
                }
                echo "</ol>";
                // fungsi sort berguna untuk mengurtkan array dalam urutan menaik.
                sort ($ar_buah);
                echo "<hr>";
                echo "<ol>";
                foreach ($ar_buah as $buah => $k) {
                    echo "<li>$buah - $v</li>";
                }
                echo "</ol>";
                ?>
                <?php
                // fungsi arsort berguna untuk mengurutkan array dalam menurun.
                arsort ($ar_buah);
                echo "<hr>";
                echo "<ol>";
                foreach ($ar_buah as $buah => $k) {
                    echo "<li>$buah - $v</li>";
                }
                echo "</ol>";
                echo "<hr>";
                ?>
                <?php
                // fungsi array pop untuk menghapus nilai terakhir dalam array.
                $tims =["erwin","heru","ali","zaki"];
                array_pop($tims);
                foreach ($tims as $person) {
                    echo "$person<br>";
                }
                echo"<hr>"
                ?>
                <?php
                // fungsi array push untuk menambahkan nilai ke dalam data array bagian terakhir.
                $tims =["erwin","heru","ali","zaki"];
                array_push($tims, "wati");
                foreach ($tims as $person) {
                    echo "$person<br>";
                }
                echo"<hr>"
                ?>
                <?php
                // fungsi array shift untuk menghapus nilai pertama pada array.
                $tims =["erwin","heru","ali","zaki"];
                array_shift($tims);
                foreach ($tims as $person) {
                    echo "$person<br>";
                }
                echo"<hr>"
                ?>
                <?php
                // funsi array unshift untuk menambahkan nillai array di urutan pertama. 
                $tims =["erwin","heru","ali","zaki"];
                array_unshift($tims, "joko","wati");
                foreach ($tims as $person) {
                    echo "$person<br>";
                }
                echo"<hr>"
                ?>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div>
    </section>
    <section class="content"id="siswa">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- Default box -->
            <div class="card">
              <div class="card-header bg-primary">
                <h3 class="card-title">Array Siswa</h3>

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
                $ns1=["id"=>1,"nim"=>"01101","uts"=>80,"uas"=>84,"tugas"=>78];
                $ns2=["id"=>2,"nim"=>"01121","uts"=>70,"uas"=>50,"tugas"=>60];
                $ns3=["id"=>3,"nim"=>"01130","uts"=>60,"uas"=>86,"tugas"=>70];
                $ns4=["id"=>4,"nim"=>"01134","uts"=>90,"uas"=>91,"tugas"=>82];
                $ar_nilai =[$ns1, $ns2, $ns3, $ns4];
              ?>
                <h3 style="text-align:center;">Daftar Nilai Siswa</h3>
                <!-- Membuka Table -->
                <table border="1" width="100%" style=" text-align:center;">
                    <thead style="background-color: #e2edff;">
                        <tr style="text-align:center;">
                            <th>
                                No
                            </th>
                            <th>
                                NIM
                            </th>
                            <th>
                                UTS
                            </th>
                            <th>
                                UAS
                            </th>
                            <th>
                                Tugas
                            </th>
                            <th>
                                Nilai Akhir
                            </th>
                        </tr>
                    </thed>
                    <tbody>
                        <?php
                        $nomor =1;
                        foreach ($ar_nilai as $nilai) {
                            echo "<tr><td>". $nomor. "</td>";
                            echo "<td>" .$nilai["nim"]. "</td>";
                            echo "<td>" .$nilai["uts"]. "</td>";
                            echo "<td>" .$nilai["uas"]. "</td>";
                            echo "<td>" .$nilai["tugas"]. "</td>";
                            $nilai_akhir = ($nilai["uts"]+$nilai["uas"]+$nilai["tugas"])/3;
                            // fungsi number format untuk membuat format penulisan bilangan angka, seperti ribuan ratusan dan lainnya.
                            echo "<td>". number_format($nilai_akhir,"2",",",".") ."</td>";
                            echo "</tr>";
                            $nomor++;
                        }
                        ?>
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
          </div>
        </div>
    </section>
    <section class="content"id="konstan">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- Default box -->
            <div class="card">
              <div class="card-header bg-primary">
                <h3 class="card-title">Variabel Konstan</h3>

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
                // variable konstan atau tidak bisa diubah dengan isi nilai baru berbeda dengan variable biasa.
                define ("PHI", 3.14);
                define ("DBNAME", "inventori");
                define ("DBSERVER", "localhost");
                $a= 8;
                $luas= PHI * $a * $a;
                $kll= 2 * PHI * $jari;

                echo "Luas lingkaran dengan jari-jari $jari : $luas .";
                echo "<br> Keliing nya bernilai: $kll";
                ?>
                <hr>
                <?php
                echo "Nama Databasenya: " .DBNAME;
                echo "<br> Lokasi Databasenya: ". DBSERVER;
                ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="content"id="user">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- Default box -->
            <div class="card">
              <div class="card-header bg-primary">
                <h3 class="card-title">Variabel User</h3>

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
                $nama= "Muhammad Jundi Fatih";
                $umur= 18;
                $berat= 55;
                echo "Nama : $nama";
                echo "<br>Umur : $umur Tahun";
                echo "<br>Berat : $berat kg";

                echo "<br>Hello $nama apa kabar? ";
                echo "<br>Hai nama saya $nama umur saya $umur tahun berat saya $berat kg. Salam kenal ya!";
                echo "<hr>";
                ?>
              </div>
            </div>
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