<?php

/** 
 *@param {pegaPesquisa} parte inicial do path.
 *@param {urlPesquisa} url atual em forma de objeto.
 */

require_once __DIR__ . "/criaTxt.php";
require_once __DIR__ . "/criaPoke.php";
require_once __DIR__ . "/paginas.php";

function endpoints($pegaPesquisa, $urlPesquisa)
{
    if ($pegaPesquisa == "/pokemon/") {
        $pegaPoke = substr($urlPesquisa['path'], 9); // armazena strings depois de /pokemon/
        $url = "https://pokeapi.co/api/v2/pokemon/" . $pegaPoke;
        $pokemonTxt = criaPoke($url, $pegaPoke);
        $pokemon = eval('return ' . file_get_contents($pokemonTxt) . ';');
        $pokemon1['Nome_pokemon'] = $pegaPoke;
        for ($l = 0; $l < 6; $l++) {
            $pokemon1['Stats'][$l] = array($pokemon['stats'][$l]['stat']['name'] => $pokemon['stats'][$l]['base_stat']);
        };
        $jsonPoke = json_encode($pokemon1);
        header("content-type:application/json");
        echo $jsonPoke;
    } else {
        $url = "https://pokeapi.co/api/v2/pokemon/?limit=150";
        $pokemonsTxt = criaTxt($url);
        $pokemons = eval('return ' . file_get_contents($pokemonsTxt) . ';');
        paginas($pokemons);
    }
}
