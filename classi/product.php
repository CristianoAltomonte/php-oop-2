<?php

include_once __DIR__ . '/category.php';

class Prodotto
{
    public $nome;
    public $immagine;
    public $prezzo;
    public $category;

    public function __construct(
        String $nome,
        String $immagine,
        Float $prezzo,
        Category $category

    ) {
        $this->nome = $nome;
        $this->immagine = $immagine;
        $this->prezzo = $prezzo;
        $this->category = $category;
    }
}
