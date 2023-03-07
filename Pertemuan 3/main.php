<?php
if (isset($_POST['submit'])) {
    $nama = $_POST["nama"];
    $jk = $_POST['jk'];
    $hobi = $_POST['hobi'];
    $ipk = $_POST['ipk'];

    // buat fungsi status
    function cekStatus($ipk){
        if ($ipk >= 3 && $ipk <= 4){
            return "LOLOS !";
        } else {
            return "Tidak LOLOS !";
        }
    }

    $status = cekStatus($ipk);
}
require_once 'header.php';
?>
<div class="container">
    <h1>Form Pendaftaran</h1>
    <hr>
    <form method="POST" action="main.php">
        <div class="form-group row">
            <label for="nama" class="col-4 col-form-label">Nama</label>
            <div class="col-8">
                <input id="nama" name="nama" type="text" class="form-control" required="required">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-4">Jenis Kelamin</label>
            <div class="col-8">
                <div class="custom-control custom-radio custom-control-inline">
                    <input name="jk" id="jk_0" type="radio" required="required" class="custom-control-input" value="cowo">
                    <label for="jk_0" class="custom-control-label">Laki Laki</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input name="jk" id="jk_1" type="radio" required="required" class="custom-control-input" value="cewe">
                    <label for="jk_1" class="custom-control-label">Perempuan</label>
                </div>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-4">Hobi</label>
            <div class="col-8">
                <div class="custom-control custom-checkbox custom-control-inline">
                    <input name="hobi[]" id="hobi[]_0" type="checkbox" class="custom-control-input" value="game">
                    <label for="hobi[]_0" class="custom-control-label">Game</label>
                </div>
                <div class="custom-control custom-checkbox custom-control-inline">
                    <input name="hobi[]" id="hobi[]_1" type="checkbox" class="custom-control-input" value="olahraga">
                    <label for="hobi[]_1" class="custom-control-label">Olahraga</label>
                </div>
                <div class="custom-control custom-checkbox custom-control-inline">
                    <input name="hobi[]" id="hobi[]_2" type="checkbox" class="custom-control-input" value="music">
                    <label for="hobi[]_2" class="custom-control-label">Music</label>
                </div>
                <div class="custom-control custom-checkbox custom-control-inline">
                    <input name="hobi[]" id="hobi[]_3" type="checkbox" class="custom-control-input" value="movie">
                    <label for="hobi[]_3" class="custom-control-label">Movie</label>
                </div>
            </div>
        </div>
        <div class="form-group row">
            <label for="ipk" class="col-4 col-form-label">IPK</label>
            <div class="col-8">
                <input id="ipk" name="ipk" type="text" class="form-control" required="required">
            </div>
        </div>
        <div class="form-group row">
            <div class="offset-4 col-8">
                <button name="submit" type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
    <hr>
    <?php
    echo "Nama: " . $nama . "<br>";
    echo "Jenis Kelamin: " . $jk . "<br>";
    echo "Hobi: " . $hobi . "<br>";
    foreach ($hobi as $h){
        echo $h . ",";
    }
    echo "<br>" ."IPK: " . $ipk . "<br>";
    echo "<br>" ."Status: " . $status . "<br>";
    ?>
</div>

<?php
require_once 'footer.php';
?>