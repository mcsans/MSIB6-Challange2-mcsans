<?php

// Fungsi untuk menghitung skor rata-rata tim
function hitungRataRata($skor)
{
    return array_sum($skor) / count($skor);
}

// Fungsi untuk memeriksa kemenangan tim
function cekPemenang($rataLumba, $rataKoala, $skorMinimum)
{
    if ($rataLumba > $rataKoala && $rataLumba >= $skorMinimum) {
        return "Tim Lumba-lumba memenangkan trofi dengan skor rata-rata $rataLumba";
    } elseif ($rataKoala > $rataLumba && $rataKoala >= $skorMinimum) {
        return "Tim Koala memenangkan trofi dengan skor rata-rata $rataKoala";
    } elseif ($rataLumba == $rataKoala && $rataLumba >= $skorMinimum && $rataKoala >= $skorMinimum) {
        return "Hasil seri dengan skor rata-rata $rataLumba untuk Tim Lumba-lumba dan Tim Koala";
    } else {
        return "Tidak ada tim yang memenangkan trofi";
    }
}

// Data Uji
$data1_lumba = [96, 108, 89];
$data1_koala = [88, 91, 110];

$dataBonus1_lumba = [97, 112, 101];
$dataBonus1_koala = [109, 95, 123];

$dataBonus2_lumba = [97, 112, 101];
$dataBonus2_koala = [109, 95, 106];

// Skor Minimum
$skorMinimum = 100;

// Hitung skor rata-rata untuk setiap tim
$rataLumba1 = hitungRataRata($data1_lumba);
$rataKoala1 = hitungRataRata($data1_koala);

$rataLumbaBonus1 = hitungRataRata($dataBonus1_lumba);
$rataKoalaBonus1 = hitungRataRata($dataBonus1_koala);

$rataLumbaBonus2 = hitungRataRata($dataBonus2_lumba);
$rataKoalaBonus2 = hitungRataRata($dataBonus2_koala);

// Cetak hasil untuk setiap data uji
echo "Data 1: " . cekPemenang($rataLumba1, $rataKoala1, $skorMinimum) . "<br>";
echo "Data Bonus 1: " . cekPemenang($rataLumbaBonus1, $rataKoalaBonus1, $skorMinimum) . "<br>";
echo "Data Bonus 2: " . cekPemenang($rataLumbaBonus2, $rataKoalaBonus2, $skorMinimum) . "<br>";

?>
