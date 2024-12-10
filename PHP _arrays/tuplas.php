<?php 

$dados =[
    'nome' => 'Kadson',
    'idade' => 17,
    'nota' => 10,
];

// ['nome' => $nome, 'idade' => $idade, 'nota' => $nota] = $dados;

extract($dados); // O extract extraí as chaves de um array e transforma elas em variáveis. Porém, deve-se tomar cuidado e pegar apenas dados confiáveis.
var_dump($nome, $idade, $nota);

compact('nome', 'idade', 'nota'); // O compact faz o contrário do extract, ele pega variáveis e transforma em array.