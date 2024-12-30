<?php 
echo "Hello World\n";

echo"Digite um  número: ";
$num1 = (int) fgets(stream: STDIN);
echo"Digite outro número: ";
$num2 = (int) fgets(stream: STDIN);

$soma = $num1 + $num2;

echo"X = $soma \n";

// ----------------------------------------------------------------------

echo"Digite o raio do circulo: ";
$R = (float) fgets(stream: STDIN);

$A = M_PI * pow(num: $R, exponent: 2);  

echo"A = $A\n";

// ----------------------------------------------------------------------

echo"Type the code number of the employee: ";
$W = (int) fgets(STDIN);

echo("Worked hours: ");
$WH = (int) fgets(STDIN);

echo("Price by worked hour: ");
$PWH = (float) fgets(STDIN);

$SPWH = $WH * $PWH;

printf("The employee $W has to receive $SPWH$ by his work.");

// ----------------------------------------------------------------------

$A = floatval(trim(fgets(STDIN)));
$B = floatval(trim(fgets(STDIN)));
$C = floatval(trim(fgets(STDIN)));

printf("TRIANGULO: %.3f\n",$s1 = $A*$C/2);

// ----------------------------------------------------------------------

echo"Digite um número: ";
$A = (int) fgets(STDIN);
echo"Digite outro número: ";
$B = (int) fgets(STDIN);

printf("Soma deu: \n", $sum1 = $A + $B,);

//-----------------------------------------------------------------------
echo"Digite um número: ";
$X = intval(trim(fgets(STDIN))); //Receive the code of the product.
echo"Digite um número: ";
$Y = intval(trim(fgets(STDIN))); //Receive the quantity of products.

switch ($X) {
    case '$X = 1':
        $X = 4.00;
        break;
    case '$X = 2':
        $X = 4.50;
        break;
    case '$X = 3':
        $X = 5.00;
        break;
    case '$X = 4':
        $X = 2.00;
        break;
    case '$X = 5':
        $X = 1.50;
        break;
}

$soma = $X * $Y;

printf("Total: R$%.2f\n", $soma);

//-----------------------------------------------------------------------

$notasList = [];

foreach (range(0, 3) as $i): 
    echo "Digite a nota: \n";
    $nota = floatval(trim(fgets(stream: STDIN)));
    $notasList[] = $nota; 
endforeach;

$media = array_sum($notasList) / 4; 

printf("Media: %.1f\n", $media); 

if ($media >= 7.0) {
    printf("Aluno aprovado.\n");
} elseif ($media < 5.0) {
    printf("Aluno reprovado.\n");
} else { 
    printf("Aluno em exame.\n");
    $notaExame = floatval(trim(fgets(STDIN))); 
    $notasList[] = $notaExame; 

    $mediaExame = array_sum($notasList) / 5; 
    printf("Media final: %.1f\n", $mediaExame); 
    if ($mediaExame >= 5.0) {
        printf("Aluno aprovado.\n");
    } else {
        printf("Aluno reprovado.\n"); 
    }
}