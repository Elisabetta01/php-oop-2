<?php

require_once __DIR__ . '/prodotti.php';
require_once __DIR__ . '/prezzo.php';


class Animali extends Prodotti{

    use Prezzo;

    public $animali;

    public function __construct($_nome, $_prezzo, $_immagine, $_categoria, $_animali){
        parent::__construct($_nome, $_immagine, $_categoria);
        $this->animali = $_animali;
        $this->prezzo = $_prezzo;
    }

      
}
?>