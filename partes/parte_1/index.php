<?php
require "calculaMatriz.php";
require  "echoResultado.php";
//error_reporting(E_ALL & ~(E_WARNING | E_NOTICE));
$matrizq1 = [[0, 1], [2, 3]];
$matrizq2 = [[3, 4], [1, 2]];
$matriz1 = [[1, 2], [4, 5], [2, 6]];
$matriz2 = [[4, 5, 6], [3, 4, 5]];
echoResultado($matrizq1, $matrizq2);
echoResultado($matriz1, $matriz2);
