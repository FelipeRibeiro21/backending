<?php
//Aqui sera o laço dos numeros de 1 a 10 
for ($i = 1; $i <= 10; $i++) {

//Aqui sera a Classificação dos números utilizando o switch
$categoria = "";
    switch (true) {
        //Aqui sera os numeros baixos
        case ($i >= 1 && $i <= 3 ):
            $categoria = "Baixo";
            break;
        //Números Médios
        case ($i >= 4 && $i <= 7 ):
            $categoria = "Médio";
            break;
        //Números Altos
        case ($i >= 8 && $i <= 10 ):
            $categoria = "Alto";
            break;
    }
//Varíavel para mostrar os numeros pares e impares
$par = ($i % 2 == 0 ) ?"par" : "ímpar";

//Ira mostrar todos os resultados com o echo
echo "O número $i é classificado como $categoria e é $par.<br>";

}
    

