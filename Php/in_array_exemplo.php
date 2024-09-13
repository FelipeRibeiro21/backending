<?php
//Criando uma array chamada frutas

$frutas = array("maçã", "banana", "laranja");
$nome_fruta = 'maçã';

//Se a maça estiver na lista mostrara uma mensagem que ela esta

if  (in_array($nome_fruta, $frutas)) {

    echo "$nome_fruta esta na lista de frutas.";

} else {

//Caso nao esteja, mostrara uma mensagem mostrando que ela não esta
echo "$nome_fruta não esta na lista de frutas";
}




