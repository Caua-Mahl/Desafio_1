<?php 
/**
 *  PAGINAÇÃO: verifica se foi passada a página na url, se não foi vira 1 por padrão.
 * @param {pokemons} arquivo txt pós eval
 * @return - echo do json com os nomes dos pokemons de acordo com a página
 */
function paginas($pokemons){ 
    if (isset($_GET['page'])) {
        if (1 <= intval($_GET['page']) && intval($_GET['page']) <= 10) {
            $page = intval($_GET['page']);
        } else {
            $page = 1;
        }
    } else {
        $page = 1;
    };
    $mostrar = 15;
    $total = ($page - 1) * 15; 
    $pagina = array_slice($pokemons['results'], $total, $mostrar); //filtra pagina
    $paginaNomes = array_column($pagina, 'name'); // filtra nomes   
    $jsonPoke = json_encode($paginaNomes);
    echo $jsonPoke;
}
?>