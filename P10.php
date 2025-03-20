<?php 
/*Lea dos Números de un mismo registro e imprima solo los positivos */
echo "Ingrese dos numeros(separados por una coma): ";
$IngresoDatos = trim(fgets(STDIN));

$Numeros = explode(",", $IngresoDatos);

if(count($Numeros) == 2){
    $PrimerValor = $Numeros[0];
    $SegundoValor = $Numeros[1];

    if ($PrimerValor >= 0) {
        echo "El primer número ingresado ($PrimerValor) es positivo.\n";
    } else {
        echo "El primer número ingresado ($PrimerValor) es negativo.\n";  
    }

    if ($SegundoValor >= 0) {
        echo "El segundo número ingresado ($SegundoValor) es positivo.\n";
    } else {
        echo "El segundo número ingresado ($SegundoValor) es negativo.\n";  
    }
}else{
    echo "Debe ingresar dos números separados por una coma";
}


?>