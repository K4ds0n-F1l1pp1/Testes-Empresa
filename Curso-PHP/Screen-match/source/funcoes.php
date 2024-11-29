<?php

function exibirMensagemLancamento(int $ano): void { // O "void" quer dizer que ele não espera nenhum retorno.
    if ($ano > 2022) {
        echo "Esse filme é um lançamento\n"; // \n pula uma linha e \t age como um tab na exibição.
    } elseif($ano > 2020 && $ano <= 2022) {
        echo "Esse filme ainda é novo\n";
    } else {
        echo "Esse filme não é um lançamento\n";
    }
};

function incluidoNoPlanoPrime (bool $planoPrime, int $anoLancamento): bool { // Ao usar ":bool", eu peço um returno em boolean.
    return $planoPrime || $anoLancamento < 2020; // || quer dizer "ou" e && quer dizer "e".
};

function criaFilme ( string $nome, int $anoLancamento, float $nota, string $genero): array {
    return [
        'nome' => $nome,
        'ano' => $anoLancamento,
        'nota' => $nota,
        'genero' => $genero,
    ];
}