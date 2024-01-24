<?php
require_once __DIR__ . "/endpoints.php";

$pesquisa = $_SERVER["REQUEST_URI"];
//$pesquisa = "http://localhost:80/pokemon/pikachu"; // testando em casa, curl com problema
$urlPesquisa = parse_url($pesquisa);
$pegaPesquisa = substr($urlPesquisa['path'], 0, 9);
endpoints($pegaPesquisa,$urlPesquisa);
?>