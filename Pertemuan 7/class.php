<?php
//bikin class BMIPASIEN
class bmiPasien
{
    //coba bikin vairable atau properti
    public $nama, $berat, $tinggi, $umur, $jk;
    //bikin function
    function __construct($nama, $berat, $tinggi, $umur, $jk){
        $this->nama = $nama;
        $this->berat = $berat;
        $this->tinggi = $tinggi;
        $this->umur = $umur;
        $this->jk = $jk;
    }
    public function hasilBMI(){
        $tinggi_m = $this->tinggi / 100;
        $bmi = $this->berat / ($tinggi_m * $tinggi_m);
        return round($bmi, 2);
    }
    public function statusBMI(){
        $bmi = $this->hasilBMI();
        if ($bmi < 18.5) {
            return "Kekurangan berat badan";
        } elseif ($bmi >= 18.5 && $bmi <= 24.9) {
            return "Berat badan normal";
        } elseif ($bmi >= 25 && $bmi <= 29.9) {
            return "Kelebihan berat badan";
        } else {
            return "Obesitas";
        }
    }
}

//buat objek
// $pasien = new bmiPasien("Rafli", "70", "169", "20", "L");
// echo "Nama: " . $pasien->nama . "<br>";
// echo "Bmi: " . $pasien->hasilBMI() . "<br>";
// echo "Status BMI: " . $pasien->statusBMI() . "<br>";

?>