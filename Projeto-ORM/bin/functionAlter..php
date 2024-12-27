<php
class MinhaClasse {
    public static $propriedade = 'valor estático';
    public static function metodoEstatico() {
        return 'Chamado por ::';
    }
}

echo MinhaClasse::$propriedade; 
echo MinhaClasse::metodoEstatico();

if (PHP_VERSION_ID < 50600) {
    // Gera um erro se a versão do PHP for menor que 5.6.
    if (!headers_sent()) {
        header('HTTP/1.1 500 Internal Server Error');
    }
    $err = 'Composer 2.3.0 dropped support for autoloading on PHP <5.6 and you are running ' . PHP_VERSION . ', please upgrade PHP or use Composer 2.2 LTS via "composer self-update --2.2". Aborting.' . PHP_EOL;
    if (!ini_get('display_errors')) {
        if (PHP_SAPI === 'cli' || PHP_SAPI === 'phpdbg') {
            fwrite(STDERR, $err);
        } elseif (!headers_sent()) {
            echo $err;
        }
    }
    trigger_error(
        $err,
        E_USER_ERROR
    );
}
?>