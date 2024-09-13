<?php

$frutas = array("maçã", "banana", "laranja");

$indice = array_search("maçã",$frutas);


if($indice !==false) {
    echo "Maçã foi encontrada na posição: ". $indice;

}

else{ echo "Maçã não foi encontrada";


}