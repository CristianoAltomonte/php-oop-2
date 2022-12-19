<?php

include_once __DIR__ . '/product.php';

class Food extends Prodotto
{
    public $pesoNetto;
    public $ingredienti;


    public function __construct(

        String $ingredienti,
        Float $pesoNetto,
        String $nome,
        String $immagine,
        Float $prezzo,
        Category $category

    ) {

        $this->ingredienti = $ingredienti;
        $this->pesoNetto = $pesoNetto;
        parent::__construct($nome,$immagine,$prezzo,$category);


    }
}

?>