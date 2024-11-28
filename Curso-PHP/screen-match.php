<?php

function exibirMensagemLancamento($ano): void {
    if ($ano > 2022) {
        echo "Esse filme é um lançamento\n"; // \n pula uma linha e \t age como um tab na exibição.
    } elseif($ano > 2020 && $ano <= 2022) {
        echo "Esse filme ainda é novo\n";
    } else {
        echo "Esse filme não é um lançamento\n";
    }
}

function incluidoNoPlanoPrime ($planoPrime, $anoLancamento) {
    return $planoPrime || $anoLancamento < 2020; // || quer dizer "ou" e && quer dizer "e".
}

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

$filme = [
    "nome" => "Thor: Ragnarok",
    "ano" => 2021,
    "nota" => 7.8,
    "genero" => "super-herói",
];


echo $filme["ano"];
