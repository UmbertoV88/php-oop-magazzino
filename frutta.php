<?php
// devo creare una classe generica(con le proprietà)
class Frutta {
    public $nome;
    public $colore;
    public $stagione;
    public $codice;

    public function __construct($name, $color, $season){
        $this->nome = $name;
        $this->colore = $color;
        $this->stagione = $season;
    }
};
?>
