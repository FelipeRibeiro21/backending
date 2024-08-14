<?php  
//Aqui mostra as variaveis das 3 notas e a função da média para calcular as notas
$nota1 = 8;
$nota2 =7;
$nota3 = 6;
$media = ($nota1 +$nota2 + $nota3) /3;

//Aqui mostra os 3 valores das 3 notas

echo "A primeira nota é $nota1" . '<br/>';
echo "A segunda nota é $nota2" . '<br/>';
echo "A terceira nota é $nota3" . '<br/>';

//Aqui mostra o resultado da média a partir das 3 notas e mostrando que se a média for menor que 7 ele reprova se não ele é aprovado
echo "Média de notas das tres provas $media<br>";
if ($media <7){
    echo 'O aluno foi Reprovado';
}
else
echo 'O aluno foi Aprovado';


 ?>