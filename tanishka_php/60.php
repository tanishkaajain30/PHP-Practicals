<?php
// India Time
date_default_timezone_set("Asia/Kolkata");
$india_time = new DateTime();

// Berlin Time
$berlin_tz = new DateTimeZone("Europe/Berlin");
$berlin_time = new DateTime("now", $berlin_tz);

// Print Date & Time
echo "India Date & Time: " . $india_time->format("Y-m-d H:i:s") . "<br>";
echo "Berlin Date & Time: " . $berlin_time->format("Y-m-d H:i:s") . "<br>";

// Calculate Difference
$diff = $india_time->diff($berlin_time);

echo "Time Difference: " . $diff->format("%h hours %i minutes %s seconds");
?>