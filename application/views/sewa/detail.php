<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Sewa</title>
</head>
<body>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Detail Sewa</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?=base_url('index.php/sewa')?>">Data Sewa</a></li>
              <li class="breadcrumb-item active">Detail Sewa</li>
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
        <h3 class="col-md-12">Detail Sewa</h3>
    <div class="col-md-12">
    <table style="text-align: center;" border="1" class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Tanggal Mulai</th>
                <th>Tanggal AKhir</th>
                <th>Tujuan</th>
                <th>No Identitas (KTP/SIM)</th>
                <th>Users ID</th>
                <th>Mobil ID</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $sewa -> id ?></td>
                <td><?php echo $sewa -> tanggal_mulai ?></td>
                <td><?php echo $sewa -> tanggal_akhir ?></td>               
                <td><?php echo $sewa -> tujuan ?></td>
                <td><?php echo $sewa -> noktp ?></td>
                <td><?php echo $sewa -> users_id ?></td>
                <td><?php echo $sewa -> mobil_id ?></td>
            </tr>
        </tbody>
    </table>
    </div>
    </div>
    <!-- /.card-body -->
    <div class="card-footer">
      Sewa
    </div>
    <!-- /.card-footer-->
  </div>
  <!-- /.card -->

  </section>
  <!-- /.content -->
  </div>
  
    
</body>
</html>