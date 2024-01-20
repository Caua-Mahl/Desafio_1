<?php
require  __DIR__ . "/calculaMatriz.php";
$matrizq1 =[[0,1],[2,3]];

$matrizq2 = [[3,4],[1,2]]; 

$matriz1 = [[1, 2, 3], [4, 5, 6]];
$matriz2 = [[4, 5, 6], [3, 4, 5]];


/*$matrizq1 =[[0, 1, 2, 3, 4], [0, 1, 2, 3, 4], [0, 1, 2, 3, 4], [0, 1, 2, 3, 4]];
$matrizq2 =[[0, 3, 4, 5], [1, 2, 7, 6], [0, 3, 4, 5], [1, 2, 7, 6]];*/
calculaMatriz($matriz1, $matriz2);
calculaMatriz($matrizq1, $matrizq2);


?>