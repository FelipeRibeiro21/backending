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

echo "Olá ".$_POST['email'].", seja bem vindo !!! <hr>  ";

echo '<pre>';
print_r ($_POST);
echo '</pre>  <hr>';

echo "E-mail:";
echo $_POST['email'];
echo '<br>';
echo "Senha: ";
echo $_POST['senha'];

?>
</body>
</html>
