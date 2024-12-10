<?php 

$alunos2024 = [
    'Ana',
    'Roberto',
    'Carlos',
    'Joana',
    'Bianca',
    'Kadson',
];

$alunosNovos = [
    'Carlos',
    'Patricia',
    'Jefferson',
    'Samanta',
];

// $alunos2025 = array_merge($alunos2024, $alunosNovos); O array_merge "soma" duas arrays, porém sobreescreve as chaves dos valores.
$alunos2025 = [...$alunos2024, 'Vanessa', ...$alunosNovos]; // Já o [...] desempacota o array e pode somá-lo com quantos o usuário quiser.
var_dump($alunos2025);

array_push($alunos2025, 'Rodrigo', 'Al Khabar', 'Bruno'); // Arreay_push pode adicionar mais de um elemento por vez.
var_dump($alunos2025);

$alunos2025 [] = 'Vantuir';

echo array_shift (  $alunos2025) . PHP_EOL . PHP_EOL;
echo array_pop($alunos2025) . PHP_EOL;