<?php
//hasil inputan
$nama = $_POST["customer"];
$produk = $_POST["produk"];
$jumlah = $_POST["text"];

//logika perhitungan
if ($produk == "tv") {
    $hasil = 4200000 * $jumlah;
} elseif ($produk == "kulkas") {
    $hasil = 3100000 * $jumlah;
} elseif ($produk == "mesin_cuci") {
    $hasil = 3800000 * $jumlah;
} else {
    $hasil = "Masukkan Jumlah Dengan Benar!";
}
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


    <title>Formulir Belanja</title>
</head>

<body>
    <h1>Belanja Online</h1>
    <hr>
    <div class="container">
        <form method="POST" action="form_belanja.php">
            <div class="form-group row">
                <label class="col-4 col-form-label" for="customer">Customer</label>
                <div class="col-8">
                    <input id="customer" name="customer" placeholder="Nama Customer" type="text" required="required" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-4">Pilih Produk</label>
                <div class="col-8">
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="produk" id="produk_0" type="radio" class="custom-control-input" value="tv">
                        <label for="produk_0" class="custom-control-label">TV</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="produk" id="produk_1" type="radio" class="custom-control-input" value="kulkas">
                        <label for="produk_1" class="custom-control-label">Kulkas</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="produk" id="produk_2" type="radio" class="custom-control-input" value="mesin_cuci">
                        <label for="produk_2" class="custom-control-label">Mesin Cuci</label>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="text" class="col-4 col-form-label">Jumlah</label>
                <div class="col-8">
                    <input id="text" name="text" placeholder="Jumlah Produk" type="text" required="required" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <div class="offset-4 col-8">
                    <button name="submit" type="submit" class="btn btn-primary">Kirim</button>
                </div>
            </div>
        </form>
    </div>
    <hr>
    <p>Nama Customer: <?= $nama ?></p>
    <p>Produk Pilihan: <?= $produk ?></p>
    <p>Jumlah Beli: <?= $jumlah ?></p>
    <p>Total Belanja: <?= $hasil ?></p>

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>

</html>