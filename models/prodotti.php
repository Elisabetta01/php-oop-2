<?php

require_once __DIR__ . '/prezzo.php';

class Prodotti{

    public $nome;
    public $immagine;
    public $categoria;

    function __construct($_nome, $_immagine, $_categoria){
        $this->nome = $_nome;
        $this->immagine = $_immagine;
        $this->categoria = $_categoria;
    }
}
?>