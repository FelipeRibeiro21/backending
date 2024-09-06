<?php
//ciando array cadastro

$cadastro = [];


//criando subarray nome

$cadastro ["nome"] = ['João','Valter','Ricardo','Pablo','Felipe'];

//Criando outra subarray chamado email

$cadastro['email'] = ['João@gmail','Valter@gmail','Ricardo@gmail','Pablo@gmail','Felipe@gmail'];

echo '<pre>';
print_r($cadastro);
echo '<pre>';

//Exibindo o 3 valor da array nome

echo $cadastro ["nome"] [1];
echo '<br>';
echo $cadastro ['email'] [3];

$cadastro ['nome'] [1] = 'Senai';

$cadastro ['email'] [2] = 'aluno@senai.br';

echo '<pre>';
print_r($cadastro);
echo '<pre>';