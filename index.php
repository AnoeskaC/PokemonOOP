<?php

// require de pagina's die ik nodig heb.
require 'Pokemon.php';
require 'Pikachu.php';
require 'Charmeleon.php';

// laat in de class
$pokemon['Pikachu'] = new Pikachu;
$pokemon['Charmeleon'] = new Charmeleon;

echo $pokemon['Pikachu']->Aanvallen('Electric Ring',$pokemon['Charmeleon']);

echo '<br>';
echo '<br>';
echo '<br>';

//test 1: "Pikachu valt Charmeleon aan met een Electric Ring Aanvallen"
echo 'test 1: "Pikachu valt Charmeleon aan met een Electric Ring Aanvallen"';
echo '<br>';
echo 'totaal HP Chameleon = '.$pokemon['Charmeleon']->hp;
echo '<br>';
//einde test

echo '<br>';
echo '<br>';
echo '<br>';

//test 2: "Charmeleon valt Pikachu aan met een Flare Aanvallen"
echo 'test 2: "Charmeleon valt Pikachu aan met een Flare Aanvallen"';
echo '<br>';
echo 'totaal HP Pikachu = '.$pokemon['Pikachu']->hp;
echo '<br>';
//einde test
