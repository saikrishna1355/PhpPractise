<?php
function armstrong($num) {
    $sum = 0;
    $temp = $num;
    while ($temp > 0) {
        $rem = $temp % 10;
        $sum = $sum + pow($rem, 3);
        $temp = $temp / 10;
    }
    if ($num == $sum) {
        return true;
    } else {
        return false;
    }
}
$num = 153;
if (armstrong($num)) {
    echo "The number $num is an Armstrong number.";
} else {
    echo "The number $num is not an Armstrong number.";
}