<?php 

$valoresObtidosFilme = file_get_contents('filme.json');
$filme = json_decode($valoresObtidosFilme, true);

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Filme Inserido</title>
</head>
<body>
    <h1><?=$filme['nome'] ?></h1>
    <dl>
        <dt> Ano de lançamento: </dt>
        <dd><?=$filme['anoLancamento']?></dd>

        <dt> Nota: </dt>
        <dd><?=$filme['nota']?></dd>

        <dt> Gênero: </dt>
        <dd><?=$filme['genero']?></dd>
    </dl>
</body>
</html>