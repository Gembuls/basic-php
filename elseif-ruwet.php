<?php

    $rwt = date("H");

    if ($rwt < "10" ) {
        echo "Good Morning";
    } elseif ($rwt < "13") {
        echo "Good Evening";
    } else {
        echo "Good Night";
    }

    echo "<hr>";

/////////////////////////////////////////////////////
    $lulus = false;

    echo "memeriksa hasil <br>";

    if ($lulus) {
        echo "hasilnya adalah true";
    }

    echo "<hr>";

/////////////////////////////////////////////////////
    $nilai = 10;

    echo "memeriksa nilai<br>";
    echo "Nilainya Adalah $nilai <br>";

    if ($nilai >= 70) {
        echo "Selamat kamu Lulus!!";
    }
    else {
        echo "Mohon Maaf Kamu Harus Belajar Lebih Giat Lagi";
    }

    echo "<hr>";

/////////////////////////////////////////////////////
    $nilai = 100;

    echo "Mengecek Nilai!! <br>";
    echo "Nilai Kamu Adalah $nilai <br>";

    if ($nilai >= 85) {
        echo "Waw Sangat Mengesankan";
    }
    elseif ($nilai >= 70) {
        echo "Selamat Kamu Di Nyatakan Lulus";
    }
    else {
        echo "Mohon Maaf Kamu Tidak Lulus";
    }


    echo "<hr>";
   
/////////////////////////////////////////////////
    $nilai = 100;

    echo "Nilai: {$nilai} <br>";

    if ($nilai >= 95) {
        echo "Predikat A";
    }
    elseif ($nilai >= 80){
        echo "Predikat B";
    }
    elseif ($nilai >= 75){
        echo "Predikat c";
    }
    elseif ($nilai >= 60){
        echo "Predikat D";
    }
    elseif ($nilai >= 40){
        echo "Predikat F";
    }
    else {
        echo "Nilai Tidak Valid";
    }

echo "<hr>";

///////////////////////////////////////////////////
    // $nilai = 1;

    // if ($nilai) {
    //     echo "Nilai: $nilai Di anggap true";
    // }
    // else {
    //     echo "Di anggap false";
    // }
