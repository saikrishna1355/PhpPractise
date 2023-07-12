<?php

/*$r1 = floatval(readline());
$x1 = floatval(readline());
$y1 = floatval(readline());
$r2 = floatval(readline());
$x2 = floatval(readline());
$y2 = floatval(readline());*/

fscanf(STDIN, "%d %d %d %d %d %d", $x1, $y1, $r1, $x2, $r2, $y2);

$distance = sqrt(pow($x2 - $x1, 2) + pow($y2 - $y1, 2));
if ($distance <= $r1 - $r2) {
    echo "C2 is in C1";
}
if ($distance <= $r2 - $r1) {
    echo "C1 is in C2";
}
if ($distance <= $r1 + $r2) {
    echo "Circumference of C1 and C2 intersect";
}
else{
    echo "C1 and C2 do not overlap";
}
?>