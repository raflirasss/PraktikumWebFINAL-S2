<?php
//tangkap hasil inputan
$proses = $_POST["kirim"];
$nama_siswa = $_POST["nama"];
$mata_kuliah = $_POST["matkul"];
$nilai_uts = $_POST["uts"];
$nilai_uas = $_POST["uas"];
$nilai_tugas = $_POST["nilai_tugas"];

//buat variable total nilai
$total_nilai = ($nilai_uts + $nilai_uas + $nilai_tugas) / 3;

//logic untuk status

$status;
if ($total_nilai >= 60) {
    $status = "LULUS";
} else {
    $status = "TIDAK LULUS";
}

//buat logic grade
$grade;
if ($total_nilai >= 85 && $total_nilai <= 100) {
    $grade = "A";
} elseif ($total_nilai >= 70 && $total_nilai <= 85) {
    $grade = "B";
} elseif ($total_nilai >= 56 && $total_nilai <= 70) {
    $grade = "C";
} elseif ($total_nilai >= 36 && $total_nilai <= 56) {
    $grade = "D";
} else {
    $grade = "E";
}
//logic untuk mengecek predikat
$predikat;
switch ($grade) {
    case "A":
        $predikat = "Sangat Memuaskhaaannn";
        break;
    case "B":
        $predikat = "Memuaskhan";
        break;
    case "C":
        $predikat = "AWOKAWOK DAPET C";
        break;
    case "D":
        $predikat = "BELAJAR LAGI DEK";
        break;
    case "E":
        $predikat = "mamah mu tidak bangga";
        break;
    default:
        $predikat = "Tidak Adaa weh";
        break;
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

    <title>Daftar Nilai</title>
</head>

<body>
    <h1 align="center">Daftar Nilai SISWAAA</h1>
    <table class="table table-striped table-dark">
        <thead>
            <tr>
                <th scope="col">Nama</th>
                <th scope="col">Mata Kuliah</th>
                <th scope="col">Nilai UTS</th>
                <th scope="col">Nilai UAS</th>
                <th scope="col">Nilai Tugas</th>
                <th scope="col">Grade</th>
                <th scope="col">Predikat</th>
                <th scope="col">Status</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $nama_siswa ?></td>
                <td><?php echo $mata_kuliah ?></td>
                <td><?php echo $nilai_uts ?></td>
                <td><?php echo $nilai_uas ?></td>
                <td><?php echo $nilai_tugas ?></td>
                <td><?php echo $grade ?></td>
                <td><?php echo $predikat ?></td>
                <td><?php echo $status ?></td>
                
            </tr>
        </tbody>
    </table>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>

</html>