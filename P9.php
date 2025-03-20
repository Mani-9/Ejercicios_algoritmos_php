<?php
/* Lea un número y calcule e imprima su raiz cuadrada. Si el número
es negativo imprima el número y un mensaje que diga: "tiene raiz imaginaria" */

// Solicita al usuario que ingrese un número para calcular su raíz cuadrada
echo "Ingrese el número del cual quiera saber su raíz cuadrada: ";

// Captura la entrada del usuario desde la consola y elimina espacios en blanco
$NumRaiz = trim(fgets(STDIN));

// Calcula la raíz cuadrada del número ingresado
$ValorRaiz = sqrt($NumRaiz);

// Verifica si el número ingresado es negativo
if ($NumRaiz < 0) {
    // Si es negativo, indica que tiene una raíz imaginaria
    echo "El número ingresado es: " . $NumRaiz . " y tiene raíz imaginaria";
} else {
    // Si es positivo o cero, muestra la raíz cuadrada calculada
    echo "El número ingresado es: " . $NumRaiz . " y su raíz cuadrada es: " . $ValorRaiz;
}

?>