<?php 

$peso = 55;
$altura = 1.75;

$imc = $peso / ($altura * $altura);

if ($imc < 18.5) {
    echo "PESO: ", $peso;
    echo "<br>";

    echo "ALTURA: ", $altura;
    echo "<br>";

    echo "IMC: ", $imc ," - MAGREZA";
}

elseif ($imc >= 18.5 && $imc < 25) {
    echo "PESO: ", $peso;
    echo "<br>";

    echo "ALTURA: ", $altura;
    echo "<br>";

    echo "IMC: ", $imc ," - NORMAL";
}

elseif ($imc >= 25 && $imc < 30) {
    echo "PESO: ", $peso;
    echo "<br>";

    echo "ALTURA: ", $altura;
    echo "<br>";

    echo "IMC: ", $imc ," - OBESIDADE: GRAU I";
}

elseif ($imc >= 30 && $imc < 40) {
    echo "PESO: ", $peso;
    echo "<br>";

    echo "ALTURA: ", $altura;
    echo "<br>";

    echo "IMC: ", $imc ," - OBESIDADE: GRAU II";
}

elseif ($imc >= 40) {
    echo "PESO: ", $peso;
    echo "<br>";

    echo "ALTURA: ", $altura;
    echo "<br>";

    echo "IMC: ", $imc ," - OBESIDADE: GRAU III";
}

else {
    echo "Houve um erro. Tente novamente!";
}
