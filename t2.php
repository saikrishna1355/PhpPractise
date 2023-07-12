<?php
function saa($n){
    $r = ($n > 30)? "greater than 30": ($n > 20? "greater than 20":  "greater than 10" );
    return $r;
}
echo saa(45);
?>