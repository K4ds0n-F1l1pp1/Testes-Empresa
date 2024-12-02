<?php 

require './modelos/filme.php';

echo "Bem vindo(a) ao Screen Match.";

$filme = new Filme(nome: 'Dia ruim para morrer', anoLancamento: 2018, genero: 'ação e suspense.');
/* $filme -> nome = 'Dia ruim para morrer.';
$filme -> anoLancamento = 2018;
$filme -> genero = 'Ação'; */

$filme -> avalia (10);
$filme -> avalia (6.7);
$filme -> avalia (7);
$filme -> avalia (7.9);

var_dump($filme);

echo $filme->media() . '\n';

echo $filme->anoLancamento();