<?php
$url = "https://pokeapi.co/api/v2/pokemon/?limit=15"; //limit=N pode ser usado para limitar o número de pokemons mostrados
$ch = curl_init($url);
$pokemons = json_decode(curl_exec($ch));
$txt = fopen(("pokemons.txt"),'w+');
?>
