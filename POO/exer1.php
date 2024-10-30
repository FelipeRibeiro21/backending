<?php

class aluno{

    public $nome = 'Roberto'; 
    public $idade = 24;
    public $curso = 'Medicina';

    function dados_alunos(){
        return "$this->nome tem  $this->idade cursando  $this->curso";

}

    function modificaCurso(){
        $this->curso = "Programação";

    }

}

$y = new aluno();
echo $y->dados_alunos();
echo '<hr>';

$y->modificaCurso();
echo $y->dados_alunos();


?>