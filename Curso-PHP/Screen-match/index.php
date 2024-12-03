<?php 

require './modelos/Titulo.php';
require './modelos/Genero.php';
require './modelos/filme.php';
require './modelos/Serie.php';
require './source/Calculos/CalculadoraDeMaratonas.php';

echo "Bem vindo(a) ao Screen Match.";

$filme = new Filme(nome: 'Dia ruim para morrer', anoLancamento: 2018, genero: Genero::Açao, duracaoEmMinutos: 180);
/* $filme -> nome = 'Dia ruim para morrer.';
$filme -> anoLancamento = 2018;
$filme -> genero = 'Ação'; */

$filme -> avalia (10);
$filme -> avalia (6.7);
$filme -> avalia (7);
$filme -> avalia (7.9);

var_dump($filme);

echo $filme->media() . "\n";

echo $filme->anoLancamento . "\n";


$serie = new Serie(nome: 'Chernobyl', anoLancamento: 2022, genero: Genero::Suspense, 
numeroTemporadas: 1, numeroEpisodios: 8, minutosPorEpisodio: 45);

$serie->avalia(9);
$serie->avalia(8.7);
$serie->avalia(10);

echo $serie->media() . "\n";

var_dump($serie);

$calculadora = new CalculadoraDeMaratona ();
$calculadora->inclui($filme);
$calculadora->inclui($serie);
$duracao = $calculadora->duracao();

echo "Você precisa de $duracao minutos para maratonar essa lista.\n"; 