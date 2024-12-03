<?php

$saldo = 1000;
$usuario = "Kadson Filippi";
echo "Digite uma senha: \n";
$senha = (int) fgets (stream: STDIN);

echo "Digite sua senha: \n";
$usuarioSenha = (int) fgets (stream: STDIN);

if ($senha === $usuarioSenha) {
    echo "\n------------------------------------------\n";
    echo "Bem vindo(a) ao Banco Semant\n\n";
    echo"*********************************************\n";
    echo "Usuario: $usuario\n";
    echo "Seu saldo é: R$$saldo\n";
    echo"*********************************************\n\n";
    
    do {
        echo "Oque você deseja fazer:\n";
        echo "1. Consultar saldo.\n";
        echo "2. Sacar.\n";
        echo "3. Depositar.\n";
        echo "4. Sair.\n";
        $numeroEscolha = (int) fgets (stream: STDIN);

        switch ($numeroEscolha) {
            case 1:
                echo"*********************************************\n";
                echo "Usuario: $usuario\n";
                echo "Seu saldo é: R$$saldo\n";
                echo"*********************************************\n\n";
                break;
            case 2:
                echo "Digite o valor a ser sacado: \n";
                $valorSacar = (int) fgets (stream: STDIN);
                if ($valorSacar <= $saldo) {
                    $saldo -= $valorSacar;
                    echo "Saque realizado com sucesso.\nSeu saldo é: R$$saldo\n\n";
                } else {
                    echo "Saldo insuficiente.\n\n";
                }
                break;
            case 3:
                echo "Digite o valor a ser depositado: \n";
                $valorDepositar = (int) fgets (stream: STDIN);
                $saldo += $valorDepositar;
                echo "Deposito realizado com sucesso. Seu saldo é: R$$saldo\n\n";
                break;
            }
        } while ($numeroEscolha!= 4);
        echo "Adeus! Até a próxima.";
        
} else {
    echo "Login bloqueado";
}