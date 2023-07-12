<?php
$x = '/[aeiou]/i';
$s = readline('Enter a string: ');
$count = preg_match_all($x, $s);
echo  $count;
?>