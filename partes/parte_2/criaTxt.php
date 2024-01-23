<?php 
/* 
    se não tiver um arquivo txt:
        cria um txt novo para armazenar os dados da api e retorna ele
    caso já tenha:
        retorna ele.

*/
function criaTxt($url){
    if(!file_exists('pokemons.txt')){
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_URL, $url); // configura caminho
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); //guarda como uma string o resultado.
        $pokemons = json_decode(curl_exec($ch), true);
        file_put_contents('pokemons.txt', var_export($pokemons, true)); // armazena no txt, var export retorna como uma string o json
        return 'pokemons.txt';

    } else {
        return 'pokemons.txt';

    }
}

?>