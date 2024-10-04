<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>

<?php


// echo "Bem vindo, usuário logado com sucesso";
// echo "<pre>";
// print_r($_GET);
// echo "</pre>";
?>


<?php

// echo "Olá ".$_POST['email'].", seja bem vindo !!! <hr>  ";

// echo '<pre>';
// print_r ($_POST);
// echo '</pre>  <hr>';

// echo "E-mail:";
// echo $_POST['email'];
// echo '<br>';
// echo "Senha: ";
// echo $_POST['senha'];

// ?>


<?php
session_start();

$usuario_autentificado = false;

$usuario_cadastro = [
    ['email' => 'admin@senai.br',
        'senha' => 12345 
    ]

];

foreach ($usuario_cadastro as $user){
    if ($user['email'] == $_POST['email'] && $user['senha'] == $_POST ['senha']){
    
        $usuario_autentificado = true;
    }
}
// Se o usuario tiver correto
if ($usuario_autentificado == true){
    $_SESSION['autentificado']= 'SIM'; 
    echo "Usuario autentificado com sucesso";
    header('Location: painel.php');
}else {
    $_SESSION['autentificado'] = 'NÃO';
    header ('Location: index.php?login=erro');

   //Se não voltara para a pagina
   header ('Location: index.php?login=erro');
}




?>


</body>
</html>
