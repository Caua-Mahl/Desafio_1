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
$matriznova = []; // nova matriz vazia
// tenho q multiplicar cada linha  do 1 por cada coluna 2 para obter [m11, m12,][m21, m22]
for ($l = 0; $l < $l1; $l++) {
//usei array_fill(int $start_index, int $count, mixed $value): array
    $matriznova[$l] = array_fill(0, $c2, 0);
};
for ($l = 0; $l < $l1; $l++) { //para cada linha da matriz 1
    for ($c = 0; $c < $c2; $c++) { //para cada coluna da matriz 2
        for ($m=0; $m < $c1;$m++){ //para cada linha da coluna 1
            $matriznova[$l][$c] += $matrizq1[$l][$c] * $matrizq2[$c][$l] ;

        }
    };
}
for ($l = 0; $l < $l1; $l++) { //para cada linha  da matriz 1
    for ($c = 0; $c < $c2; $c++) { //para cada coluna da matriz 2
            echo ($matriznova[$l][$c] . " ");
        }
        echo "\n";
    };
?>