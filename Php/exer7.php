<?php

$constante = 10;
$contador = 0;

if ($contador >= 0){
    do{
        if($contador % 2 !=0 ){
            echo "$contador<br>";
            
        }
        $contador++;
    }
    while($contador <= $constante);
}
else{
    echo "O numero não é valido";
}
