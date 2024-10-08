<?php 

$peso = 55;
$altura = 1.75;

$imc = $peso / ($altura * $altura);

switch ($imc) {
    case $imc < 18.5: 
        echo "PESO: ", $peso;
        echo "<br>";

        echo "ALTURA: ", $altura;
        echo "<br>";

        echo "IMC: ", $imc ," - MAGREZA";
        break;

    case $imc < 25:
        echo "PESO: ", $peso;
        echo "<br>";

        echo "ALTURA: ", $altura;
        echo "<br>";

        echo "IMC: ", $imc ," - NORMAL";
        break;

    case $imc < 30:
        echo "PESO: ", $peso;
        echo "<br>";
    
        echo "ALTURA: ", $altura;
        echo "<br>";
    
        echo "IMC: ", $imc ," - OBESIDADE: GRAU I";
        break;

    case $imc < 40:
        echo "PESO: ", $peso;
        echo "<br>";
        
        echo "ALTURA: ", $altura;
        echo "<br>";
        
        echo "IMC: ", $imc ," - OBESIDADE: GRAU II";
        break;

    case $imc > 40:
        echo "PESO: ", $peso;
        echo "<br>";
            
        echo "ALTURA: ", $altura;
        echo "<br>";
            
        echo "IMC: ", $imc ," - OBESIDADE: GRAU III";
        break;
}






