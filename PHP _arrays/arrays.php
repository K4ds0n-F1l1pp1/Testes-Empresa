<?php 

$array = [
    1 => 'Um',
    2 => 'Dois',
    3 => 'Três',
];

// $contador = 0;

foreach ($array as $numeral => $nomeNumero) {
    echo "$numeral em português é: $nomeNumero" . PHP_EOL;
    // $contador++;
};

echo "Contador: ".count(value: $array) . PHP_EOL;   