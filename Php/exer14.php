<?php

//Definindo usuarios com a array multidimensional com subarrays
$usuarios = [
    [ "id" => 1,
    "nome" => "Joaõ",
    "cidade" => "Cerquilho",
    "estado" => "SP"],

     ["id" => 2,
     "nome" => "Felipe",
    "cidade" => "São Paulo",
    "estado" => "SP"],
    
    ["id" => 3,
     "nome" => "Maria",
    "cidade" => "Salvador",
   "estado" => "Bahia"],
    
   ["id" => 4,
   "nome" => "Augusto",
   "cidade" => "Belo Horizonte",
   "estado" => "MG"],

    ["id" => 5,
    "nome" => "Guilherme",
    "cidade" => "Tiete",
    "estado" => "SP"],
  
];
//Variavel para buscar o valor
$busca = "Guilherme";

echo '<pre>';
print_r($usuarios);
echo '</pre';

$indice = array_search($busca, array_column($usuarios, 'nome'));

if ($indice !== false){
  echo "$busca foi encontrada com o id: " . $usuarios[$indice]['id'];
}else{
  echo"$busca nao foi encontrada na lista";

}





