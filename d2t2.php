<?php
function sasi($a, $b, $epsilon = 0.001){
    if (($a - $b) < $epsilon)
     return 1;
    else
     return 0;
}
echo(sasi(11, 11) . "\n");  
echo(sasi(31.0, 17.01));
?>