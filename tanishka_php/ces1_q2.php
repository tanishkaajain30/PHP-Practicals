<?php
// Input
$name = "Tanishka";
$basic = 10000;

// Calculations
$hra = 0.20 * $basic;
$da = 0.10 * $basic;
$gross = $basic + $hra + $da;
$tax = 0.10 * $gross;
$net = $gross - $tax;

// Associative array
$emp = [
    "Name" => $name,
    "Basic Salary" => $basic,
    "HRA" => $hra,
    "DA" => $da,
    "Gross Salary" => $gross,
    "Tax" => $tax,
    "Net Salary" => $net
];

// Display in table
echo "<table border='1' cellpadding='10'>";
foreach ($emp as $key => $value) {
    echo "<tr>";
    echo "<td>$key</td>";
    echo "<td>$value</td>";
    echo "</tr>";
}
echo "</table>";
?>