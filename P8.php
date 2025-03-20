<?php 
//Lea un número e imprima el numero y el valor absoluto de ese número.

echo "Ingrese cualquier numero entero:";
$numero = trim(fgets(STDIN));

$ValorAbsoluto = abs($numero);

echo 'El Valor ingresado es: '. $numero . ' y su valor absoluto es: ' . $ValorAbsoluto;


?>