<?php
/*$a = readline("");
$b = readline("");
$c = readline("");
$d = readline("");
$e = readline("");
$f = readline("");*/

fscanf(STDIN, "%d %d %d %d %d %d", $a, $b, $c, $d, $e, $f);

$y = (($f-($d*$c)/$a)/(($e-($b*$d)/$a)));
$x= (($c-($b*$y))/$a);
echo "x= $x","y=$y";
?>
