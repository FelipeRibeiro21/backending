<?php
//Criando array
$cadastro = [];

//Criando Subarray usuario
$cadastro['usuario'] = ['João','Maria','Pedro'];

//Criando outra subarray senha
$cadastro ['senha'] = ['1234','abcd','5678'];

echo "<hr>";

//Mostrando os valores que irei mudar

echo '<pre>';
print_r ($cadastro);
echo $cadastro['usuario'] [1];
echo '<br>';
echo $cadastro['senha'] [1];

echo'<pre>';

//Mudando os Valores
$cadastro ['usuario']  [1] = 'Ana';

$cadastro['senha'] [1] = 'efgh';

echo '<pre>';


echo "<hr>";
//Mostrando os valores alterados

echo $cadastro['usuario'] [1];
echo '<br>';
echo $cadastro['senha'] [1];

//Mostrando a array alternada

echo '<pre>';
print_r($cadastro);
echo'<pre>';