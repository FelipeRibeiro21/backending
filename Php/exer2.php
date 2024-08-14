<?php
//Aqui mostra as funções do seu salario e horas de trabalho
$salario = 3000;
$horas = 10;

echo  "Seu salario de $salario <br/>" ;
//Aqui seja caso o salario seja menor que 2000 e mais que 10 horas o que acaba gerando um bonus de 20%

if ($salario <2000 && $horas >10) {
    $bonus = $salario + ($salario*0.2);
 echo "Voce recebeu um bonus de 20% em seu salario, seu salario atual é de $bonus";}

//Aqui seja caso seja o salario de 2000 ou mais e sendo mais que 5 horas o que gera 10% de desconto

 elseif ($salario >=2000 && $horas >5 ) {;
   $bonus = $salario + ($salario*0.1);
   echo "Voce recebeu um bonus de 10% no seu salario, seu salario atual é de $bonus" ;}
   
//Aqui seria se nao tivesse nao tivesse nenhum dos itens anteriores voce nao ganha nenhum bonus]

 else {echo "Voce nao recebeu nenhum bonus";}
