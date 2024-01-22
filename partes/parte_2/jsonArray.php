<?php 
function jsonArray($json){
    $jsonArray = json_decode($json, true);
    for($i=1;$i < count($jsonArray);$i++){
        $aLista[]= [
            'valor'=> $i,
            'chave'=> $jsonArray[$i][$i]
        ];
    }
    $dados[]['dados']=$aLista;
    return $dados;
}

?>