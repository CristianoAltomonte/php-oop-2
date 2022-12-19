<?php

include_once __DIR__ . '/product.php';

class Toy extends Prodotto

{
    public $caratteristiche;
    public $dimensioni;


    public function __construct(

        String $caratteristiche,
        String $dimensioni,
        String $nome,
        String $immagine,
        Float $prezzo,
        Category $category

    ) {
        $this->caratteristiche = $caratteristiche;
        $this->dimensioni = $dimensioni;
        parent::__construct($nome,$immagine,$prezzo,$category);
    }
}

?>