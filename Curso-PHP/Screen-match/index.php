<?php

require "./source/funcoes.php";   // "__DIR__" quer dizer que ele trás o diretório atual.

echo "Bem-vindo(a) ao screen match!\n";

$nomeFilme = "Top Gun - Maverick";

$anoLancamento = 2022;

$quantidadeDeNotas = $argc - 1; // "$argc" armazena a quantidade de itens descritos, por exemplo [1,2,3] => o argc irá mostrar 3 elementos.
$notas = []; // Essa é a array.

for ($contador = 1; $contador < $argc; $contador++) {
    $notas[] = (float) $argv[$contador];
}

$notaFilme = array_sum($notas) / $quantidadeDeNotas; // array_sum soma os intens dentro da array.
$planoPrime = true;

$incluidoNoPlano = incluidoNoPlanoPrime(planoPrime: $planoPrime, anoLancamento: $anoLancamento);

echo "Nome do filme: " . $nomeFilme . "\n";
echo "Nota do filme: $notaFilme\n";
echo "Ano de lançamento: $anoLancamento\n";

exibirMensagemLancamento(ano: $anoLancamento);

$genero = match ($nomeFilme) { // A "match" é uma forma de buscar algum elemento e adicioná-lo em alguma característica.
    "Top Gun - Maverick" => "ação",
    "Thor: Ragnarok" => "super-herói",
    "Se beber não case" => "comédia",
    default => "gênero desconhecido",
};

echo "O gênero do filme é: $genero\n";

$filme = criaFilme (nome: "Thor: Ragnarok", anoLancamento: 2021, nota: 7.8, genero: "Super-herói");

echo $filme["ano"];

var_dump($notas);
sort($notas);
var_dump($notas);
$menorNota = min($notas);

var_dump($filme["nome"]);
$posicaoDoisPontos = strpos($filme["nome"],":");
var_dump($posicaoDoisPontos);

var_dump(substr($filme["nome"], 0, $posicaoDoisPontos));

// echo json_encode(value: $filme);
// var_dump (json_decode(json: '{"nome":"Thor: Ragnarok","ano":2021, "nota":7.8, "genero":"Super-her\u00f3i"}', associative: true));

$filmeComoStringJson = json_encode($filme);
file_put_contents(__DIR__ . '/filme.json', $filmeComoStringJson);