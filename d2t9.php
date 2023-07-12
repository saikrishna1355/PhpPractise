<?php
$a = [15, 45, 22, 11, 55, 90];
rsort($a);
echo implode("  ", array_slice($a, 0, 3));
?>