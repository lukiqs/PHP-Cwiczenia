<?php
//wyrazenia regularne 

$string = "Ala kot pies kop kon. Hello. AtRororo.";
$string1 = "1125687123256204812341325";
$string2 = "1 aa 25 bb 895";
$string3 = "d4f5v$%#^68f f6F4GD6SG $%^6%$&632";

//jeden z podanych znaków
$result;
preg_match_all('/ko[tp]/', $string, $result);
var_dump($result);

//zaden z podanych nakow
preg_match_all('/ko[^t]/', $string, $result);
var_dump($result);

//wszystkie podane znaki
preg_match_all('/k(ot)/', $string, $result);
var_dump($result);

//dokladnie 2 razy
preg_match_all('/\d{2}/', $string1, $result);
var_dump($result);

//2 lub wiecej razy
preg_match_all('/\d{2,}/', $string1, $result);
var_dump($result);

//2 lub 3 razy
preg_match_all('/\d{2,3}/', $string1, $result);
var_dump($result);

//znak ucieczki
preg_match_all('/[A-Z][a-z]+\./', $string, $result);
var_dump($result);

//Wyrazy 2 lub wielo literowe zaczunające z dużej litery
preg_match_all('/[A-Z][a-z]{4}/', $string, $result);
var_dump($result);

//jeden lub wiecej razy 
preg_match_all('/\d+/', $string2, $result);
var_dump($result);

//zero lub wiecej razy 
preg_match_all('/\d*/', $string2, $result);
var_dump($result);

//zero lub jeden razy 
preg_match_all('/\d?/', $string2, $result);
var_dump($result);

//dowolny znak 
preg_match_all('/ ./', $string2, $result);
var_dump($result);

//lub
preg_match_all('/aa|bb/', $string2, $result);
var_dump($result);

//znak ^ rozp. lini
preg_match_all('/^1/', $string2, $result);
var_dump($result);

//znak $ koniec lini
preg_match_all('/5$/', $string2, $result);
var_dump($result);

//znak alfanumeryczny
preg_match_all('/\w/', $string3, $result);
var_dump($result);

//znak inny niz alfanumeryczny
preg_match_all('/\W/', $string3, $result);
var_dump($result);

//biały znak
preg_match_all('/\s/', $string3, $result);
var_dump($result);

//inny niż biały znak
preg_match_all('/\S/', $string3, $result);
var_dump($result);

//granica słowa
preg_match_all('/\bAl/', $string, $result);
var_dump($result);

//brak granicy słowa
preg_match_all('/\Bro/', $string, $result);
var_dump($result);

//liczba
preg_match_all('/\d/', $string1, $result);
var_dump($result);

//liczba
preg_match_all('/\D/', $string2, $result);
var_dump($result);

