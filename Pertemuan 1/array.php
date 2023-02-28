<?php
// buat array
$binatangs = ["kocheng", "ayam", "ikhan", "buwung puyoh"];
//tampilin kocheng
echo $binatangs[0] . "<br>";
//tampilin buwung puyoh
echo $binatangs[3] . "<br>";
//tampilin ayam
echo $binatangs[1] . "<br>" . "<hr>";

// looping array
foreach ($binatangs as $binatang) {
    echo $binatang . "<br>";
}
echo "<hr>";
// buat aray asosiatif
$mahasiswa = ["nama"=>"Rapli", "umur"=>21, "alamat"=>"depok"];

echo $mahasiswa["nama"] . "<br>";

foreach ($mahasiswa as $key => $value) {
    echo $key . " = ".$value;
    echo "<br>";
}
echo "<br>";

// Buat array multidimensi
$dosen = [
    ["Rojul", "Web"],
    ["Pak Reza", "DDP"],
    ["Pak Lukman", "SO"]
];

echo $dosen[0][1];
echo "<br>";

foreach ($dosen as $dsn){
    echo "Nama Dosen: ". $dsn[0] . "<br>";
    echo "Matkulnya adalah: ". $dsn[1];
    echo "<br>";
}
?>