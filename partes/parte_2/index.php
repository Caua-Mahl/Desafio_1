<?php
require_once __DIR__ . "/criaTxt.php";
$url = "https://pokeapi.co/api/v2/pokemon/?limit=150"; //limit=N pode ser usado para limitar o número de pokemons mostrados


$pokeTxt = criaTxt($url); // chama a função e armazena o nome do txt

//Transformando o txt em um objeto novamente;
$pokemons = eval('return ' . file_get_contents($pokeTxt) . ';'); //forma q e achei para usar o arquivo txt com ajuda do eval

echo "<pre>";
var_dump($pokemons['results']);

// paginação:
$pagina = 1;
$limite = 15;
$inicio = ($pagina * $limite) - $limite;
?>