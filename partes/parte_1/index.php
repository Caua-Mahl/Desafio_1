<?php
require  __DIR__ . "/calculaMatriz.php";
require  __DIR__ . "/echoResultado.php";
// Report all errors except E_NOTICE
error_reporting(E_ALL & ~(E_WARNING | E_NOTICE)); //todos erros menos os warnings e notices são mostrados (tudo funcionando como esperado mas dava avisos que nao interferiam no resultado final) 
$matrizq1 = [[0, 1], [2, 3]];
$matrizq2 = [[3, 4], [1, 2]];
//QUADRADAS /\ --- Ñ QUADRADAS \/
$matriz1 = [[1, 2, 3], [4, 5, 6]];
$matriz2 = [[4, 5, 6], [3, 4, 5]];
echoResultado($matriz1, $matriz2);
echoResultado($matrizq1, $matrizq2);
    