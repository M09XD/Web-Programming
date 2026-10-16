<?php
function calculate($minutes, $up, $down) {
    $hoursUp = $minutes / 60;
    $distance = $up * $hoursUp;
    $hoursDown = $distance / $down;
    $average = (2 * $distance) / ($hoursUp + $hoursDown);
    return (int)round($average);
}

echo calculate(18, 20, 60) . "<br>";  // 30
echo calculate(30, 8, 24);              // 12
?>
