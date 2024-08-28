<?php

$lista_frutas = array ('Banana', 'Maçã','Morango','Uva'); //Criando a array

echo '<pre>';
print_r ($lista_frutas);
echo $lista_frutas[0]; //Selecionando o item na array
echo "<hr>";
echo '</pre>';

echo '</pre>';
$lista_frutas[0] = "Melancia";  //Alternando o valor banana para melancia
print_r ($lista_frutas);
echo '</pre>';

echo "<br>";

echo $lista_frutas[0];

