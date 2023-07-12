<?php
$sum = 0;
for ($i = 2; $i < 100; $i++) {
    if (isPrime($i)) {
        $sum += $i;
    }
}
echo "The sum of the prime numbers less than 100 is: $sum";
function isPrime($n) {
    if ($n <= 1) {
        return false;
    }
    for ($i = 2; $i <= sqrt($n); $i++) {
        if ($n % $i == 0) {
            return false;
        }
    }
    return true;
}