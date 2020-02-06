<?php

include 'frutta.php';
include 'mela.php';

$marlen = new Mela('mela', 'rossa', 'inverno', 'small');
$marlen->regione = 'abruzzo';
echo '<pre>';
var_dump($marlen);
echo '<pre>';

$mela = new Frutta('mela', 'rossa', 'inverno');
// $mela->nome = 'mela';
// $mela->colore = 'rossa';
// $mela->stagione = 'inverno';
$mela->codice = '12qw3';
echo '<pre>';
var_dump($mela);
echo '<pre>';

$pera = new Frutta('pera', 'giallo', 'primavera');
echo '<pre>';
var_dump($pera);
echo '<pre>';


?>
