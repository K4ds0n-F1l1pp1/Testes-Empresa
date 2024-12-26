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

printf("TRIANGULO: %.3f",$s1 = $A*$C/2);
?>