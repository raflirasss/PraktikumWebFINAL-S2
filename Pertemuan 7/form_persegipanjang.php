<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Rectangle Calculator</title>
    <?php
    if (isset($_POST["submit"])) {  // Ngecek pake isset udh submit apa blm
        require_once "class_persegipanjang.php";  // panggil class PersegiPanjang

        $panjang = $_POST["panjang"];  // tangkep data form
        $lebar = $_POST["lebar"];

        $pp = new PersegiPanjang($panjang, $lebar);  // Buat objek

    }
    ?>
</head>

<body style="background-color: #d0edec;">
    <div class="container">
        <h1 class="text-center">Luas dan Keliling Persegi Panjang</h1> <br><br>
        <form method="POST" action="form_persegipanjang.php">
            <div class="form-group row">
                <label for="panjang" class="col-4 col-form-label">Panjang</label>
                <div class="col-8">
                    <input id="panjang" name="panjang" placeholder="Masukkan Panjang" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="lebar" class="col-4 col-form-label">Lebar</label>
                <div class="col-8">
                    <input id="lebar" name="lebar" placeholder="Masukkan Lebar" type="text" class="form-control">
                </div>
            </div><br>
            <div class="form-group row">
                <div class="offset-4 col-8">
                    <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
        <br>
        <hr style="border-width: 2px; background-color: black;">
        <br><br>
        <div>
            <h2 class="text-center">HASIL</h2><br>
            <table class="table table-hover table-dark text-center">
                <thead>
                    <tr>
                        <th scope="col">Panjang</th>
                        <th scope="col">Lebar</th>
                        <th scope="col">Keliling</th>
                        <th scope="col">Luas</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?= $pp->panjang; ?></td>
                        <td><?= $pp->lebar; ?></td>
                        <td><?= $pp->kelilingPP(); ?></td>
                        <td><?= $pp->luasPP(); ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>


</body>

</html>