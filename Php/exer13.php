<?php

$nome = array("Ricardo","Valter","Vinicius", "Felipe","Guilherme","Luís","Pablo","Maguíla","Pedro","Vitória");
$nome2 = "Pablo";
$indice = array_search("Pablo",$nome);


if($indice !==false) {
    echo "$nome2 foi encontrado na posição: ". $indice;

}

else{ echo "$nome2 não foi encontrado"; 
}