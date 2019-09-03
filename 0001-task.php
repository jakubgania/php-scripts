<?php

function fibo($n)
{
    $arr = [1, 1];

    while ($n-- > 1) {
        $arr = [$arr[1], array_sum($arr)];
    }

    return $arr[1];
}

for ($i = 0; $i < 10; $i++) {
    echo "fibo($i) => " . fibo($i) . "\n";
}


function fiboRecursion($number)
{
    if ($number <= 1) {
        return 1;
    }

    // obliczanie kolejnych elementów ciągu poprzez wywoływanie funkcji w samej sobie 
    return fiboRecursion($number - 1) + fiboRecursion($number - 2);
}

for ($i = 0; $i < 10; $i++) {
    echo "fibo($i) => " . fiboRecursion($i) . "\n";
}
