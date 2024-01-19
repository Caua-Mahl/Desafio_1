<?php
require  __DIR__ . "/calculaMatriz.php";
/*$matrizq1 = [[0, 1, 2, 3, 4], [0, 1, 2, 3, 4], [0, 1, 2, 3, 4], [0, 1, 2, 3, 4]];

$matrizq2 = [[0, 3, 4, 5], [1, 2, 7, 6], [0, 3, 4, 5], [1, 2, 7, 6]]; */

/*$matriz1 = [[1, 2, 3], [4, 5, 6]];
$matriz2 = [[4, 5, 6], [3, 4, 5]];*/
/*foreach ($matrizq1 as $k) {
    foreach ($k as $n) {
        foreach ($matrizq2 as $k2) {
            foreach ($k2 as $n2) {
                var_dump($n2);
            }
        }
    }
}*/

$matrizq1 = [[1, 2], [4, 6]];
$matrizq2 = [[4, 6], [3, 5]];
$l1 = count($matrizq1); // linhas matriz 1
$l2 = count($matrizq2); // linhas matriz 2
$c1 = count($matrizq1[0]); // colunas matriz 1
$c2 = count($matrizq2[0]); // colunas matriz 2
// tenho q multiplicar cada linha  do 1 por cada coluna 2 para obter [m11, m12,][m21, m22]
for($l=0; $l <$l1;$l++){
    for($c=0; $c <$c2;$c++){
    $matriznova[$l][$c] = 0 ;//criar novo espaço em uma nova matriz
    $matrinova[$l][$c] = 
    };
};
var_dump($matriznova);






?>