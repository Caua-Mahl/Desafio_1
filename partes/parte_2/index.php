<?php
require_once __DIR__ . "/criaTxt.php";
$url = "https://pokeapi.co/api/v2/pokemon/?limit=150"; //limit=N pode ser usado para limitar o número de pokemons mostrados


$pokeTxt = criaTxt($url); // chama a função e armazena o nome do txt

//Transformando o txt em um objeto novamente;
$pokemons = eval('return ' . file_get_contents($pokeTxt) . ';'); //forma q e achei para usar o arquivo txt com ajuda do eval

echo "<pre>";
//var_dump($pokemons['results']);

// paginação:
//verificando se foi passada a página na url e se ela é de 1 a 10, se n for vira 1
if(isset($_GET['page'])){
    if(1 <= intval($_GET['page']) && intval($_GET['page']) <= 10){
        $page = intval($_GET['page']);
    } else {
        $page = 1;
    }
}  else {
    $page = 1;
};
$mostrar = 15; //quantos pokemons quero mostrar
$total=($page-1)*15; // pegar a página e multiplicar pela quantidade que quero mostrar, -1 adicionado pq se não os primeiros pokemons estariam na página 0
$pagina = array_slice($pokemons['results'],$total,$mostrar);
foreach($pagina as $pokemon) {
    echo $pokemon['name'] . "\n";
}
?>