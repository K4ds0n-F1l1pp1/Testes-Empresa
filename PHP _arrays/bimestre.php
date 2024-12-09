<?php 

$notasBimestre1 = [
    'Ana' => 10,
    'Roberto' => 4,
    'Carlos' => 6,
    'Joana' => 8,
    'Bianca' => 8,
    'Kadson' => 7,
];

$notasBimestre2 = [
    'Ana' => 10,
    'Roberto' => 4,
    'Carlos' => 6,
    'Joana' => 4,
    'Bianca' => 8,
    'Kadson' => 9,
];

// array_diff mostra a diferença entre as listas, mas pelo valor.
// array_diff_key mostra a diferença entre as listas mas pelas chaves ao invés de toda ela.
// array_diff_assoc procura as diferenças em toda a lista, sendo valor, variável, etc...

$alunosFaltantes = array_diff_assoc($notasBimestre1, $notasBimestre2);
// var_dump(array_keys ($alunosFaltantes)); array_keys recebe a array e retorna apenas as chaves.

$nomesAlunos = array_keys ($alunosFaltantes);
$notasAlunos = array_values ($alunosFaltantes); // array_values recebe a lista e retorna apenas o valor.
var_dump (array_combine($notasAlunos, $nomesAlunos));