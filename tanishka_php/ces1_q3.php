<?php
$cities = ["Delhi", "Mumbai", "Chennai", "Kolkata", "Dubai", "Dehradun"];

// Sort alphabetically
sort($cities);

// Display sorted list
echo "Sorted Cities:<br>";
foreach ($cities as $city) {
    echo $city . "<br>";
}

// Cities starting with D
echo "<br>Cities starting with D:<br>";
foreach ($cities as $city) {
    if (stripos($city, "D") === 0) {
        echo $city . "<br>";
    }
}
?>