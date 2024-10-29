<?php

$numeros = array(2, 5, 7, 8, 10, 18, 30, 37, 38, 60);

foreach ($numeros as $numero) {
    $numero = $numero % 2;

    if ($numero == 0) {
        echo "Par <br>";
    }

    else if ($numero =! 0) {
        echo "Ímpar <br>";
    }
}