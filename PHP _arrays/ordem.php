<?php 

$notas = [
    [
        'Aluno' => 'Maria',
        'Nota' => 10,
    ],
    [
        'Aluno' => 'Kadson',
        'Nota' => 9,
    ],
    [
        'Aluno' => 'Pedro',
        'Nota' => 6,
    ],
    [
        'Aluno' => 'Julia',
        'Nota' => 7,
    ],
];

function ordenarNotas (array $nota1, array $nota2): int 
{
    if ($nota1['Nota'] > $nota2['Nota']) {
        return -1;
    }
    if ($nota1['Ńota'] < $nota2['Nota']) {
        return 1;
    }
    return 0;
}

usort( $notas, callback: 'ordenarNotas'); // usort é usado para você definir os parâmetros do sort para ordenar arrays.
var_dump($notas);