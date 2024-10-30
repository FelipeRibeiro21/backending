<?php

class livro{

    public $titulo = 'Pequeno Principe'; 
    public $autor = 'squib';
    public $ano_publicacao = '2010';

    function exibir_detalhes(){
        return "$this->titulo publicado por $this->autor no ano  $this->ano_publicacao";

}

    function modificaano_publicado(){
        $this->ano_publicacao = "2022";

    }

}

$y = new livro();
echo $y->exibir_detalhes();
echo '<hr>';

$y->modificaano_publicado();
echo $y->exibir_detalhes();


?>