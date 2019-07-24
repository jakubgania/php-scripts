<?php

$fraza = readline('Podaj frazę do zakodowania: ');

$kod    = base64_encode($fraza);
$kod    = str_rot13($kod);
$tabela = str_split($kod, ceil(sqrt(strlen($kod))));
$kod    = join('', array_map(function ($str) {
    return strrev($str);
}, $tabela));

echo "Zakodowana wiadomość to:\n$kod\n";

/**
 * Zamień program kodujący w dekodujący i znajdź frazę która po zakodowaniu, dała by następujący kod:
 * apv9TE6OPYyczouEJLucUVyyzrwyTo=RFMh9
 * 
 * odpowiedź
 * 
 * fraza po zdekodowaniu to : Dobrze, zadanie zaliczone!
 */

// odczyt wartości z linii
$code = readline('Podaj frazę do zdekodowania: ');

// utworzenie tablicy elementów o rozmiarach równych pierwiastkowi zaokrąglonemu w górę do najbliższej liczby całkowitej
$codeElementsArray = str_split($code, ceil(sqrt(strlen($code))));

// utworzenie stringa poprzez odwrócenie elementów z tablicy funkcją strrev
$hash    = join('', array_map(function ($element) {
    return strrev($element);
}, $codeElementsArray));

// dekodowanie rot13
$hash    = str_rot13($hash);

// dekodowanie bas64
$hash    = base64_decode($hash);

echo "Zdekodowana wiadomość to:\n$hash\n";