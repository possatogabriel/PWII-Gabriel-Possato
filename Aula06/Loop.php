<?php

$i = 1;
$j = 1;

echo "While: ";

while ($i < 6) {
    echo $i;

    $i ++;
}

echo "<br>";
echo "Do - While: ";

do {
    echo $j;

    $j ++;
} while ($j < 6);

echo "<br>";
echo "For: ";

for ($x = 0; $x <= 10; $x++) {
    echo $x;
}

echo "<br>";
echo "Foreach: ";

$cores = array("vermelho", "verde", "azul", "amarelo");

foreach ($cores as $cor) {
    echo "$cor <br>";
}
