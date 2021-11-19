<?php
function ulaginya($values) {
    foreach($values as $index=>$value) {
        // echo "value: ". $value . " indexnya: ". $index;
        echo "value: $value indexnya: $index";
        echo "<br>";
    }
}
// jalankan fungsi\
$arraynya = [3,2,3,4,5,6,4,34,4];
ulaginya($arraynya);
