<?php
$n = 112;
$bn = decbin($n);
$bit1 = $bn[1];
$bit2 = $bn[2];
if ($bit1 == $bit2) {
    echo "The bits are the same.";
} else {
    echo "The bits are not the same.";
}
?>