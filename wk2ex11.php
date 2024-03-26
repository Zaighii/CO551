<?php
$mymarks = array(
    "CS101" => 85,
    "CS102" => 72,
    "CS103" => 68,
    "CS104" => 90,
    "CS105" => 78,
    "CS106" => 88
);

foreach ($mymarks as $module => $mark) {
    echo "Module code: $module - Mark: $mark <br/>";
}

$total = 0;
foreach ($mymarks as $mark) {
    $total += $mark;
}
$average = $total / count($mymarks);

// Output the average mark
echo "Average mark: $average";
?>

