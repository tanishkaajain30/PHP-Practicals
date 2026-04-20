<?php

$Sx = array("a" => "Red", "b" => "Green", "c" => "Blue");
$Sy = array("u" => "Yellow", "v" => "Orange", "w" => "Pink");

$Sz = $Sx + $Sy;   // Union of $Sx and $Sy

var_dump($Sz);

var_dump($Sx == $Sy);   // Outputs: boolean false
var_dump($Sx === $Sy);  // Outputs: boolean false
var_dump($Sx != $Sy);   // Outputs: boolean true
var_dump($Sx <> $Sy);   // Outputs: boolean true
var_dump($Sx !== $Sy);  // Outputs: boolean true

echo "<br>This program is written and executed by Tanishka Jain";

?>
