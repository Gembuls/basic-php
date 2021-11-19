<?php

$makanNasigoreng = 10;
$makanIkan = 20;
$makanNasipadang = 30;

# hitung Nilai rata-rata
$rataRata = ($makanNasigoreng + $makanIkan + $makanNasipadang) / 3;

# tampilkan datanya
echo "Nasi Goreng: {$makanNasigoreng} <br>";
echo "Ikan: {$makanIkan} <br>";
echo "Nasi Padang: {$makanNasipadang} <br>";
echo "Rata-Rata Orang makan {$rataRata} <br>";

# Lihat Tipe data dari variable $rataRata
var_dump($rataRata);

