<?php 
    function calculaMatriz(array $m1, array $m2 ){ 

        $l1 = count($m1); // linhas matriz 1
    $c1 = count($m1[0]); // colunas matriz 1
    $c2 = count($m2[0]); // colunas matriz 2
    $matriznova = []; // nova matriz vazia
// tenho q multiplicar cada linha  do 1 por cada coluna 2 para obter [m11, m12,][m21, m22]
    for ($l = 0; $l < $l1; $l++) {
//usei array_fill(int $start_index, int $count, mixed $value): array
    $matriznova[$l] = array_fill(0, $c2, 0);
};
for ($l = 0; $l < $l1; $l++) { //para cada linha da matriz 1
    for ($c = 0; $c < $c2; $c++) { //para cada coluna da matriz 2
        for ($m=0; $m < $c1;$m++){ //para cada linha da coluna 1
            $matriznova[$l][$c] += $m1[$l][$m] * $m2[$m][$c] ;

        }
    };
}
for ($l = 0; $l < $l1; $l++) { //para cada linha  da matriz 1
    for ($c = 0; $c < $c2; $c++) { //para cada coluna da matriz 2
            echo ($matriznova[$l][$c] . " ");
        }
        echo "\n";
    };
    } 