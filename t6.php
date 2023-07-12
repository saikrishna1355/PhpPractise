<?php
fscanf(STDIN, "%d %d %d", $a, $b, $c);
$d = $a * $a;
$e = $b * $b;
$f = $c * $c;
if ( $d + $e == $f or $e + $f == $d or $e + $f == $d ){
    echo ("yes");
}
else {
    echo ("NO");
}