<?php
function selfMultiply(& $number) {
    $number *= $number;
    return $number;
}
$mynum = 5;
echo $mynum;
echo "<br>";
selfMultiply($num);
echo $mynum;
echo "<br> This program is written & executed by Tanishka Jain.";
?>