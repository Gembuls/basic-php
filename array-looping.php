<?php
// array

$values = [1,4,6,9,8];
// var_dump($values);

// dimulai dari index ke-0
// echo $values[1];

// panjang array
// echo count($values);


// looping = perulangan
for($i = 0; $i < count($values); $i++) {
    echo $values[$i];
    echo "<br>";
}

// bahaya infinite loop: perulangan tak berujung

// looping while
// while (count($values) < 5) {

// }

// do while

// foreach --> sering dipakai
echo "<hr>";
foreach($values as $index=>$value) {
    // echo "value: ". $value . " indexnya: ". $index;
    echo "value: $value indexnya: $index";
    echo "<br>";
}

echo "<hr>";
