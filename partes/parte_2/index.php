<?php

$curl = curl_init();

curl_setopt_array($curl, [
    CURLOPT_RETURNTRANSFER => 1,
    CURLOPT_URL => 'https://pokeapi.co/api/v2/pokemon/ditto'
]);

$response = curl_exec($curl);

curl_close($curl);
