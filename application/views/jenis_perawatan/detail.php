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
            <h1>Detail Jenis Perawatan</h1>
          </div>
          <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?=base_url('index.php/jenis_perawatan')?>">Data Jenis Perawatan</a></li>
              <li class="breadcrumb-item active">Detail Jenis Perawatan</li>
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
                <th>Jenis Perawatan</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $jenis -> id ?></td>
                <td><?php echo $jenis -> nama ?></td>
            </tr>
        </tbody>
    </table>
    </div>
    </div> 
    <!-- /.card-body -->
    <div class="card-footer">
        Detail
    </div>
    <!-- /.card-footer-->
  </div>
  <!-- /.card -->
        </div>

    </section>
    <!-- /.content -->

    
</body>
</html>