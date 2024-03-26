<?php

// Fungsi untuk menghitung BMI
function hitungBMI($massa, $tinggi)
{
    return $massa / ($tinggi * $tinggi);
}

// Data Uji
$data1_mark = ["berat" => 78, "tinggi" => 1.69];
$data1_john = ["berat" => 92, "tinggi" => 1.95];

$data2_mark = ["berat" => 95, "tinggi" => 1.88];
$data2_john = ["berat" => 85, "tinggi" => 1.76];

// Hitung BMI untuk Mark dan John
$bmi_mark1 = hitungBMI($data1_mark["berat"], $data1_mark["tinggi"]);
$bmi_john1 = hitungBMI($data1_john["berat"], $data1_john["tinggi"]);

$bmi_mark2 = hitungBMI($data2_mark["berat"], $data2_mark["tinggi"]);
$bmi_john2 = hitungBMI($data2_john["berat"], $data2_john["tinggi"]);

// Cek apakah Mark memiliki BMI yang lebih tinggi dari John
$markHigherBMI1 = $bmi_mark1 > $bmi_john1;
$markHigherBMI2 = $bmi_mark2 > $bmi_john2;

// Cetak hasil untuk setiap data uji
echo "Data 1: Mark memiliki BMI lebih tinggi dari John? " . ($markHigherBMI1 ? 'Ya' : 'Tidak') . "<br>";
echo "Data 2: Mark memiliki BMI lebih tinggi dari John? " . ($markHigherBMI2 ? 'Ya' : 'Tidak') . "<br>";

?>
