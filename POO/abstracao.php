<?php
//Modelo -> Entidade

class Funcionario {


//Atributos -> Caracteristicas 

public $nome = 'José'; 
public $relefone = null;
public $numFilhos = 2;

//Método -> Ações 

    function resumirCadFunc(){
    return "$this->nome possui $this->numFilhos filhos(s) ";

}
function modificarNumFilhos($numFilhos){
    //Afetar um atributo do objeto
    $this->numFilhos = $Filhos;


}

function modificarNome($AlternarNome){
$this->nome = $AlternarNome;
}
}


echo '<hr>';
$x = new Funcionario();
$x->modificarNumFilhos(3);
echo $y->resumirCardFunc();
echo '<hr>';

$x = new Funcionario();
$x_>modificarNome('Gilmar');
echo $x->resumirCadFunc();
echo '<hr>';




?>