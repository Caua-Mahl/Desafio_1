<?php
require_once __DIR__ . "/endpoints.php";

$pesquisa = $_SERVER["REQUEST_URI"];
$urlPesquisa = parse_url($pesquisa);
var_dump($urlPesquisa);
$pegaPesquisa = substr($urlPesquisa['path'], 0, 9);
endpoints($pegaPesquisa,$urlPesquisa);
?>