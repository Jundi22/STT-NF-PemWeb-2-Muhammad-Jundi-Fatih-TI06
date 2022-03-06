<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
</head>
<body>
    <div style="border:1px solid; margin: 10px;">
        <div class="container-fluid">
            <div class="row justify-content-between">
                <div class="col-md-9 pt-2">
                    <h3>BELANJA ONLINE</h3>
                    <hr>
                    <form method = "POST" action = "form_belanja.php">
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
</body>
</html>