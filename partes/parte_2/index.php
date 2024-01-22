<?php
require_once __DIR__ . "/jsonArray.php";
$url = "https://pokeapi.co/api/v2/pokemon/?limit=3"; //limit=N pode ser usado para limitar o número de pokemons mostrados
$ch = curl_init($url);
$pokemons = json_decode(file_get_contents($url), true);
//$pokemons = json_decode(curl_exec($ch), true); tentar usar esse

file_put_contents('pokemons.txt', var_export($pokemons, true));

$pokeTxt = 'pokemons.txt';
echo "<pre>";
var_dump($pokemons['results']);
/*
// Transformando o txt em um objeto novamente (n foi como esperado);
foreach ($pokeTxt1 as $key => $value) {
    $pokeTxt1[$key]  = rtrim($value, "\r");
}
var_dump($pokeTxt1);
$pokearray=jsonArray($pokeTxt1);
var_dump($pokearray);

*/

// paginação:
$pagina = 1;
$limite = 15;
$inicio = ($pagina * $limite) - $limite;
