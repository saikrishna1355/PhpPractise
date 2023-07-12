<?php

$input = "1,2,3,6,7,8,9,10,12";
$output = "";


$numbers = explode(",", $input);


$start = $numbers[0];
$end = $numbers[0];


for ($i = 1; $i < count($numbers); $i++) {
    
    if ($numbers[$i] == $numbers[$i - 1] + 1) {
        $end = $numbers[$i];
    } else {
        
        if ($start == $end) {
            $output .= $start . ",";
        } else {
            $output .= $start . "-" . $end . ",";
        }
        $start = $numbers[$i];
        $end = $numbers[$i];
    }
}


if ($start == $end) {
    $output .= $start;
} else {
    $output .= $start . "-" . $end;
}


echo "Input: " . $input . "<br>";
echo "Output: " . $output;

?>
