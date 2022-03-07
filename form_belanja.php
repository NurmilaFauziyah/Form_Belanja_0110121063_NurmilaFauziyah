<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>FORM BELANJA</title>
    <style>
        * {
            border: 0;
            box-sizing: 0;
            margin: 0;
        }
    </style>
</head>
<body>
<div style="display: flex;">
    <div style="width: 100%;">
        <p style="font-family:'Arial'; font-size: 22px; margin: 10px 20px 0px 20px;">Belanja Online</p>
        <form method="POST" action="form_belanja.php" style="margin: 10px 20px 0px 20px;">
            <div class="form-group row" style="width: 70%;">
                <label for="customer" class="col-4 col-form-label" style="text-align: right;" ><b>Customer</b></label> 
                <div class="col-8">
                <input id="customer" name="customer" placeholder="Nama Customer" type="text" class="form-control" style="width: 70%;" value="">
                </div>
            </div>
            <div class="form-group row" style="width: 70%;">
                <label class="col-4" style="text-align: right;"><b>Pilih Produk</b></label> 
                <div class="col-8">
                <div class="custom-control custom-radio custom-control-inline">
                    <input name="produk" id="produk_0" type="radio" class="custom-control-input" value="TV"> 
                    <label for="produk_0" class="custom-control-label">TV</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input name="produk" id="produk_1" type="radio" class="custom-control-input" value="KULKAS"> 
                    <label for="produk_1" class="custom-control-label">KULKAS</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input name="produk" id="produk_2" type="radio" class="custom-control-input" value="MESIN CUCI"> 
                    <label for="produk_2" class="custom-control-label">MESIN CUCI</label>
                </div>
                </div>
            </div> 
            <div class="form-group row" style="width: 70%;"> 
                <label for="jumlah" class="col-4 col-form-label" style="text-align: right;"><b>Jumlah</b></label> 
                <div class="col-8">
                <input id="jumlah" name="jumlah" placeholder="Jumlah" type="text" class="form-control" style="width: 35%;" value="">
                </div>
            </div> 
            <div class="form-group row" style="width: 70%;">
                <div class="offset-4 col-8">
                <input name="proses" type="submit" class="btn btn-success" value="Kirim"></input>
                </div>
            </div>
        </form>
    </div>
    <div style="width: 30%; margin: 10px 20px 0px 20px;">
        <div class="list-group">
            <div class="list-group-item list-group-item-action active">
                Daftar Harga
            </div>
            <div class="list-group-item">
                TV : 4.200.000
            </div>
            <div class="list-group-item">
                Kulkas : 3.100.000
            </div>
            <div class="list-group-item">
                MESIN CUCI : 3.800.000
            </div>
            <div class="list-group-item list-group-item-action active">
                Harga Dapat Berubah Setiap Saat
            </div>
        </div>
    </div>
</div>
<?php 
$proses = isset ($_POST['proses']) ? ($_POST['proses']) : '';
$customer = isset ($_POST['customer']) ? ($_POST['customer']) : '';
$produk = isset ($_POST['produk']) ? ($_POST['produk']) : '';
$jumlah = isset ($_POST['jumlah']) ? ($_POST['jumlah']) : '';

$total = 0;
$harga_TV = 4200000;
$harga_Kulkas = 3100000;
$harga_mesincuci = 3800000;

if($produk == "TV"){
    $produk = "TV";
    $total = $jumlah * $harga_TV;
}elseif($produk == "KULKAS"){
    $produk = "KULKAS";
    $total = $jumlah * $harga_Kulkas;
}elseif($produk == "MESIN CUCI"){
    $produk = "MESIN CUCI";
    $total = $jumlah * $harga_mesincuci;
}

    echo '&nbsp &nbsp &nbsp Nama Customer : '. $customer .'<br>';
    echo '&nbsp &nbsp &nbsp Produk Pilihan : '. $produk .'<br>';
    echo '&nbsp &nbsp &nbsp Jumlah Beli : '. $jumlah .'<br>';
    echo '&nbsp &nbsp &nbsp Total Belanja : Rp '. number_format($total, 0, ".", ".") . ',-'; 

?>
</body>
</html>