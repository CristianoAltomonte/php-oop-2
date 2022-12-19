<?php

include_once __DIR__ . '/product.php';

class Accessory extends Prodotto
{
    public $materiale;
    public $dimensioni;


    public function __construct(

        String $materiale,
        String $dimensioni,
        String $nome,
        String $immagine,
        Float $prezzo,
        Category $category

    ) {
        $this->materiale = $materiale;
        $this->dimensioni = $dimensioni;
        parent::__construct($nome,$immagine,$prezzo,$category);
    }
}

?>