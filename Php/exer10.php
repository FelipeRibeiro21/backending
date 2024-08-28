<?php

$numeros = array (0,1,2,3,4,5,6,7,8,9,10); //Criando a array


//Chamando com prit
echo  '<pre>';
print_r ($numeros);

//mostrando os valores mudados
echo $numeros[0]; 
echo '<br>';
echo $numeros[4];
echo '<br>';
echo $numeros[9];
echo"<hr>";

echo'</pre>';

echo'<pre>';



//Mudando os valores do 0,4,9
 $numeros[0] = 100;
 $numeros[4] = 500;
 $numeros[9] = 1000;
 
    
 print_r ($numeros);
 
//Mostrando quais valores mudaram

echo $numeros[0]; 
echo '<br>';
echo $numeros[4];
echo '<br>';
echo $numeros[9];
echo"<hr>";

 echo '</pre>';

 echo "<br>";
 
echo $numeros[0];