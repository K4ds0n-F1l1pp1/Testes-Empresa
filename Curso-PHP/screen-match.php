<?php

echo"Bem vindo(a) ao Screen Match!\n"; // \n Pula uma linha e o \t faz a função do tab.

$nomeFilme = "Top Gun - Maverick";
$anoFilme = $argv[1] ?? 2022; /* O $argv serve para armazenar dados, porém ele não sabe qual armazenar e armazena tudo.
Mas tem uma forma de lidar com isso, basta especificar o indíce que você quer armazenar ou pegar para mostar.
O símbolo ?? representa que, caso o valor do $argv[1] fique vazio, oque vem a direita será usado (no caso 2022). */
$somaNota = 9 + 6 + 7.6 + 8.3 + 5.1;
$notaFilme = $somaNota / 5;
$planoPrime =$argv[2] ?? 2;

// $incluidoNoPlano = $planoPrime || $anoFilme < 2020;

echo "Nome do filme: " .$nomeFilme;
echo "\tLançamento: " .$anoFilme. "\n";
echo "Nota do filme: $notaFilme\n"; // Quando se usa aspas duplas, o php lê oque está dentro delas, seja varável ou texto. Porém, ao usar aspas simples, ele não diferencia oque está dentro, tudo vira texto.
if ($planoPrime == 1) {
    echo "Tipo do plano prime: " .$planoPrime. " . Ele incluí esse filme.\n";
} else {
    echo "Esse tipo de plano não incluí esse filme. \n";
}

//echo 'texto...' . "\n"; Pode-se fazer a concatenação entre as aspas.

if ($anoFilme >= 2023 && $anoFilme <2025) {
    echo "O filme é atual.\n";
} else if ($anoFilme < 2023) {
    echo "O filme é antigo.\n";
} else {
    echo "O filme não foi lançado ainda.\n";
}

if ($notaFilme >= 7 && $notaFilme <= 8) {
    echo "O filme é recomendado e levemente bem avaliado.\n";
} else if ($notaFilme > 8 && $notaFilme <=10) {
    echo "O filme é muito recomendado e muito bem avaliado.\n";
} else {
    echo "O filme não é recomendado.";
}

