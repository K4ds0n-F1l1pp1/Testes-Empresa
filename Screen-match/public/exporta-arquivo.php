<?php 

$filme = [
    'nome' => $_POST['nome'],
    'anoLancamento' => $_POST['ano'],
    'nota' => $_POST['nota'],
    'genero' => $_POST['genero'],
];

file_put_contents(filename: 'filme.json', data: json_encode(value: $filme));
header('location: /sucesso.php?filme=' . $filme['nome']); 