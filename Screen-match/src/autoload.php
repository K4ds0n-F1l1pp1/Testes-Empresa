<?php 

spl_autoload_register(function (string $className) {
    $caminho = str_replace(search: "Screen-match",replace: "srcS", subject: $className) . ".php";
    $caminho = str_replace("\\", DIRECTORY_SEPARATOR, $caminho);
    var_dump( __DIR__ . DIRECTORY_SEPARATOR . $caminho);
    var_dump('caminho');
    require_once __DIR__ . DIRECTORY_SEPARATOR . $caminho;
    var_dump('chegu aqui');
});