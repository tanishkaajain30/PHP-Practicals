<?php
$number = 4200;
$factors = array();   // fixed name
$count = 0;

for($i = 1; $i <= $number; $i++) {   // start from 1
    if($number % $i == 0) {
        $factors[] = $i;
        $count++;

        if($count == 10) {
            break;
        }
    }
}

foreach($factors as $factor) {
    echo "Factors are $factor <br>";
}

echo "<br>This program is written and executed by Tanishka Jain";
?>