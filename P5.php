<?php
/*Leer de un mismo registro el nombre, la edad y el sexo de cualquier persona e imprimirlo,
sólo si la persona es de sexo masculino y mayor de edad, el nombre de la persona 
NOTA: Suponga que el registro que se lee tiene grabado, en el campo denominado "sexo" el numero 1
en vez de "masculino" y el numero 2 en vez de "femenino"
 */

//Datos de entrada
echo "Ingrese su nombre, edad, sexo (1=masculino, 2=femenino) todos separados por coma: ";
$InDatos = trim(fgets(STDIN));

//Separar los datos
$SpDatos = explode(',', $InDatos);

//Excepción si no se ingresan los datos correctamente
if (count($SpDatos) === 3) {
    $nombre = trim($SpDatos[0]);
    $edad = (int)trim($SpDatos[1]);
    $sexo = (int)trim($SpDatos[2]);

    if ($edad >= 18 and $sexo === 1) {
        echo "Nombre: " . $nombre;
    } else {
        echo 'Error: No es hombre o no es mayor de edad.';
    }
} else {
    echo 'Error: Ingrese los datos correctamente.';
}
