<?php 

spl_autoload_register(function (string $className) {
    $caminho = str_replace(search: "ScreenMatch",replace: "src", subject: $className) . ".php";
    $caminho = str_replace("\\", DIRECTORY_SEPARATOR, $caminho);

    require_once __DIR__ . DIRECTORY_SEPARATOR . $caminho;
});