<?php

// aktywacja trybu poprzez który można dodać deklarację typów w parametrach funkcji oraz można określić typ zwracanej wartości
declare(strict_types=1);

$tablica = array_map(function () {
    return rand(0, 5);
}, array_fill(0, 10, 0));

echo 'Tablica: ' . join(', ', $tablica) . PHP_EOL;
echo 'Iloczyn wszystkich niezerowych elementów tablicy to: ' . multiplyingNonZeroElementsOfArray($tablica) . PHP_EOL;

// echo 'Iloczyn wszystkich niezerowych elementów tablicy to: ' . multiplyingNonZeroElementsOfArraySecondVersion($tablica) . PHP_EOL;

// funkcja obliczająca iloczyn elementów niezerowych
// jako argument przyjmuje tablicę liczb - zmienna typu array
// wartość zwracana jest typu integer
function multiplyingNonZeroElementsOfArray (array $arrayOfNumbers): int
{
    // deklaracja zminnej dla wyniku obliczeń
    $result = null;

    // sprawdzenie czy tablica istnieje i czy jej rozmiar jest większy od zera
    if (!$arrayOfNumbers || count($arrayOfNumbers) == 0)
    {
        return 'array is empty or not exists';
    }

    // pętla iterująca po wszystkich elementach tablicy
    // foreach w tym przypadku ponieważ jest to wystarczająca konstrukcja i prostsza w zapisie (niepotrzebna jest tu logika jaką oferuje np. for)
    foreach ($arrayOfNumbers as $item)
    {
        // sprawdzenie czy dany element jest niezerowy czyli tutaj większy od zera
        if ($item > 0)
        {
            // gdy zmienna $result jest jeszcze o wartosci nullowej to jej pierwszy element jest przypisywany
            if ($result == null)
            {
                $result = $item;
            }
            else
            {
                // każdy następny pasujący element jest mnożony przez wynik poprzedniego mnożenia
                $result = $result * $item;
            }
        }
    }
    
    // zwracanie wartości wynikowej
    return $result;
}


// przykładowa wersja druga => skrócona
function multiplyingNonZeroElementsOfArraySecondVersion (array $arrayOfNumbers): int
{
    $result = null;

    if (!$arrayOfNumbers || count($arrayOfNumbers) == 0)
        return 'array is empty or not exists';

    foreach ($arrayOfNumbers as $item) {
        if ($item > 0)
            $result == null ? $result = $item : $result = $result * $item;
    }
    
    return $result;
}

