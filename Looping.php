<?php

// bahaya infinite loop: perulangan tak berujung

# While Loop

    // $x = 10;

    // while ($x <= 1000) {
    // echo "No Nya Adalah: $x <br>";
    // $x+=10;
    // }


# Do While Loop

    // $x = 1;

    // do {
    //     echo "Nilainya Adalah: $x <br>";
    //     $x++;
    // } while ($x <= 100);


# For Loop

    // for ($x = 0; $x <= 30; $x++){
    //     echo "NomorNya Adalah $x <br>";
    // }


# foreach --> sering dipakai

    $values = [1,4,6,9,8];

    foreach($values as $index=>$value) {
        // echo "value: ". $value . " indexnya: ". $index;
        echo "value: $value indexnya: $index";
        echo "<br>";
    }
