<?php

class Mela extends Frutta {

    public $grandezza;
    public $regione;
    public function __construct($name, $color, $season, $size){
        parent::__construct($name, $color, $season);
        $this->grandezza = $size;
    }

};
?>
