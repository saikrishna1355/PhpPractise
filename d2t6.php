<?php
$m = $_POST['m'];
$d = $_POST['d'];
$day = date('l', mktime(0, 0, 0, $m, $d, 2004));
echo "The day is: $day";
?>