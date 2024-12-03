<?php

require  "./source/modelos/Genero.php";
require  "./source/modelos/Titulo.php";
require  "./source/modelos/Serie.php";
require  "./source/modelos/filme.php";
require  "./source/Calculos/CalculadoraDeMaratonas.php";

echo "Bem-vindo(a) ao ScreenMatch\n";

$filme = new Filme(
    'John Wick',
    2021,
    Genero::Acao,
    180,
);

$filme->avalia(10);
$filme->avalia(10);
$filme->avalia(7.9);
$filme->avalia(8.3);

var_dump($filme);

echo $filme->media() . "\n";

echo $filme->anoLancamento . "\n";

$serie = new Serie(nome: 'Chernobyl', anoLancamento: 2018, genero: Genero::Drama, temporadas: 1, episodiosPorTemporada: 11, minutosPorEpisodio: 55);

echo $serie->anoLancamento . "\n";

$serie->avalia(8);
$serie->avalia(7.9);
$serie->avalia(9);

echo $serie->media() . "\n";

$calculadora = new CalculadoraDeMaratona();
$calculadora->inclui($filme);
$calculadora->inclui($serie);
$duracao = $calculadora->duracao();

echo "Para essa maratona, você precisa de $duracao minutos";