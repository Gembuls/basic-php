<?php

#inisiasi dan inisialisasi variable
$a = 10;
$b = 30;
$c = $a + 5;
$d = $b + (10 * 10);
$e = $d / $c; //bagi

#tampilan data dengan perintah echo 
echo "Variable a: {$a} <br>";
echo "Variable b: {$b} <br>";
echo "Variable c: {$c} <br>";
echo "Variable d: {$d} <br>";
echo "Variable e: {$e} <br>";

# Mengetahui tipe data dari variable 
var_dump($e);

#kondisi
// if () {

// }



///// if, else
// if () {

// } else {

// }


//// if, else if, else
// if () {

// } else if () {

// } else {}

//// bersarang / nested
// if () {
//     if () {}
// } else {
//     if () {}
// }

// Kalau mursid buka
//     maka beli
// Kalau mursid tutup
//     maka beli nasi padang
// Kalau keduanya tutup
//     maka beli mi kodon

echo "<br>";
echo "<hr>";
echo "<br>";


$mursid = "tutup";
$nasipadang = "tutup";

if ($mursid == "buka") {
    echo "Beli mursid";
} else if ($mursid == "tutup" && $nasipadang == "buka") {
    echo "beli nasi padang";
} else {
    echo "beli mi kodong";
}

// Boolean
// true dan false
//
// pasangan
//  true dan true = true
//  true dan false = false
//  false dan true = false
//  false dan false = false
////////////////////////
//  true atau true = true
//  true atau false = true
//  false atau true = true
//  false atau false = false


// 1+(2*3)+(4/2)+10 = 
// 1+6+2+10 = 19

// (true and false) or (false and true) = 
// false or false = false

echo "<hr>";

// if (true && false || false && true) {
//     echo "false";
// } else {
//     echo "true";
// }




?>
