<?php
//Aqui mostra o dinheiro gasto pelas compras e se o cliente é vip pelo numero
$compras = 600;
$cliente = 1;

echo "Suas compras de $compras <br/>";

//Aqui seja caso o cliente seja Vip OU ele tenha mais que 500 reais em compras ele seja vip

if ($cliente == 1 or $compras >500 ) {
echo "Voce possui o VIP";}

//Aqui caso nao seja nenhum dos dois ele não sera cliente vip

else {
    echo "Voce não é cliente vip";}