<?php
// Associative array: Name => Marks
$students = array(
    "Aman"   => 95,
    "Neha"   => 93,
    "Riya"   => 98,
    "Karan"  => 92,
    "Pooja"  => 96
);

// Display results
echo "<h3>Top 5 Students Result</h3>";

foreach ($students as $name => $marks) {
    echo "Student Name: $name <br>";
    echo "Marks: $marks <br><br>";
}
echo "<br>This program is written and executed by Tanishka Jain";

?>