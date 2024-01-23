<?php 
    /**
        *@param array $m1 — Matriz 1 que vai ser multiplicada com m2.
        *@param array $m2 — Matriz 2 que vai ser multiplicada com m1.
        *@return void resultado formatado da multplicação de m1 com m2.
    */
    function echoResultado(array $m1, array $m2){
        echo "___________\n\n";
        calculaMatriz($m1,$m2 );
        echo "___________\n\n";
    }
?>