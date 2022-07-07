<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Mobil</title>
</head>
<body>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Detail Perawatan Mobil</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?=base_url('index.php/perawatan')?>">Data Perawatan Mobil</a></li>
              <li class="breadcrumb-item active">Detail Perawatan</li>
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
    <div class="col-md-12">
    <table style="text-align: center;" border="1" class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Tanggal</th>
                <th>Biaya</th>
                <th>Km Mobil</th>
                <th>Deskripsi</th>
                <th>Id Mobil</th>
                <th>Id Jenis Perawatan</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $perawatan -> id ?></td>
                <td><?php echo $perawatan -> tanggal ?></td>
                <td><?php echo $perawatan -> biaya ?></td>               
                <td><?php echo $perawatan -> km_mobil ?></td>
                <td><?php echo $perawatan -> deskripsi ?></td>
                <td><?php echo $perawatan -> mobil_id ?></td>
                <td><?php echo $perawatan -> jenis_perawatan_id ?></td>
            </tr>
        </tbody>
    </table>
    </div>
    </div> 
      <!-- /.card-body -->
      <div class="card-footer">
        Perawatan
      </div>
      <!-- /.card-footer-->
    </div>
    <!-- /.card -->

  </section>
  <!-- /.content -->
  </div>
    
</body>
</html>