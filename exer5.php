<?php
//Função para geerar a tabuada de um número

function gerartabuada ($numero) {
    $tabuada = ""; //Inicializa yma string para armazenar a tabuada]
    
    for ($i = 1; $i <= 10; $i++) {
        $resultado = $numero * $i;
        $tabuada .= "$numero X $i =
        $resultado <br/>";
    }
    return $tabuada;
}
    $tabuada5 = gerartabuada (5);

 
    echo "$tabuada5";


    

    