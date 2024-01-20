<?php
require  __DIR__ . "/calculaMatriz.php";
require  __DIR__ . "/echoResultado.php";
error_reporting(~E_WARNING); //todos erros menos o warning são mostrados
$matrizq1 =[[0,1],[2,3]];
$matrizq2 = [[3,4],[1,2]]; 
$matriz1 = [[1, 2, 3], [4, 5, 6]];
$matriz2 = [[4, 5, 6], [3, 4, 5]];
echoResultado($matriz1, $matriz2);
echoResultado($matrizq1, $matrizq2);
?>