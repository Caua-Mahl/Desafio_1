<?php 
function criaPoke($url,$poke){
    $pokeTxt = $poke.'.txt';
    if(!file_exists($pokeTxt)){
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_URL, $url); // configura caminho
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); //guarda como uma string o resultado.
        $pokemon = json_decode(curl_exec($ch), true);
        file_put_contents($pokeTxt, var_export($pokemon, true)); // armazena no txt, var export retorna como uma string o json
        return $pokeTxt;
    } else {
        return $pokeTxt;
    };
}
?>