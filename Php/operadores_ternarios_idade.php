<?php
//Aqui mostra a idade da pessoa e a variavel resultado, se a idade for mais que 18 ou igual
// uma mensagem ira abrir caso seja menos que 18 (maior de idade) outra mensagem ira abrir

$idade = 19;
$resultado = ($idade >=18) ? "Maior de Idade " : "Menor de idade ";
echo $resultado; 
echo "<br/>";
?>
 
<?php
//Mesma coisa que o anterior porem com nomes, caso voce escreva o nome "Pablo" na variavel nome ira receber
//boas vindas, caso senha outro nome sera recebido como visitante
$nome = "Pablo";
$mensagem = ($nome == "Pablo") ? "  Olá, Pablo!" : "Olá, Visitante!";
 echo $mensagem;
 echo "<br/>";

?>

<?php

//Caso a variavel esteja  true ira logar no site, caso nao esteja, tera que fazer o login
$is_logged_in = true;

$mensagem2 = $is_logged_in ? 'Bem vindo de volta!' : 'Por favor, faça login.';
echo $mensagem2;

?>




