<?php

class Category
{
    public $nome;
    public $icona;


    public function __construct(

        String $nome,
        String $icona

    ) {
        $this->nome = $nome;
        $this->icona = $icona;
    }
}

?>