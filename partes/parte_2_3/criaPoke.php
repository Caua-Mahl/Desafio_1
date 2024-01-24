<?php 
/** 
    *@param {url} link da API válido para seus dados serem transformados em txt.
    *@return {nome do arquivo} nome do txt criado em string.   
*/
function criaPoke($url,$poke){
    $pokeTxt = $poke.'.txt'; 
    if(!file_exists($pokeTxt)){
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_URL, $url); // configura caminho
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $pokemon = json_decode(curl_exec($ch), true);
        file_put_contents($pokeTxt, var_export($pokemon, true)); // armazena e retorna como uma string o json
        return $pokeTxt;
    } else {
        return $pokeTxt;
    };
}
?>