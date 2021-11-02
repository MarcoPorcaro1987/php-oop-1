<!-- Oggi pomeriggio ripassate i primi concetti di classe e di variabili e
metodi d'istanza che abbiamo visto stamattina e create un file index.php in cui:
- è definita una classe ‘Movie’
=> all'interno della classe sono dichiarate delle variabili d'istanza
=> all'interno della classe è definito un costruttore
=> all'interno della classe è definito almeno un metodo
- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà -->

<?php

require __DIR__. "./classes/Movie.php";

$film1 = new Movie( "Rambo", 1982, "Ted Kotcheff", "93 min", "English");
$film2 = new Movie( "Robocop", 1987, "Paul Verhoeven", "102 min", "English");

var_dump($film1, $film2);