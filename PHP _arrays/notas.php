<?php 

$notas = [
    'Ana' => 10,
    'Roberto' => 4,
    'Carlos' => 6,
    'Joana' => null,
    'Bianca' => 8,
    'Kadson' => 7,
];

// asort faz com que o sort ordene mantendo as chaves. Pode ser combinado com o rsort => arsort(etc).
// ksort ordena pelas chaves, que nessa situação, seria por ordem alfabética.
// o rsort inverte a maneira que o sort ordena as arrays.

ksort($notas); 
var_dump($notas);

// echo gettype($notas); gettype recebe uma variável e retorna o valor dela.

if (is_array($notas)) {
    echo 'É um array.';
}

// array_key_exists verifica se a chave existe.
// in_array verifica se o valor existe.

var_dump(array_is_list($notas));

echo 'Ana fez a prova.' . PHP_EOL;
var_dump(isset ($notas['Ana'])); // isset verifica se a chave está definida e tem algum valor.

echo 'Alguém tirou 10 ???' . PHP_EOL;
var_dump(in_array (10, $notas, true)); 

echo 'Quem tirou 10 ???' . PHP_EOL;
echo array_search(10, $notas). PHP_EOL;