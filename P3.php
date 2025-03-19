<?php
/* Leer el mismo registro de nombre y edad de cualquier persona e imprimir
el nombre solo si la persona es mayor de 18 años
*/
echo "Ingrese su nombre y su edad(separados por ','): ";
$ingreso = trim(fgets(STDIN));

//Se separa el nombre de la edad 
$datos = explode(',', $ingreso);

//exepcion si no se ingresan los datos correctamente
if (count($datos) == 2) {
    $nombre = trim($datos[0]); //Se guarda el nombre
    $edad = (int)trim($datos[1]); //Se guarda la edad

    //Se imprime el nombre y la edad si la edad es mayor a 18 años
    if ($edad >= 18) {
        echo 'Nombre: ' . $nombre . PHP_EOL;
    } else {
        echo 'Error: La edad debe ser mayor a 18 años' . PHP_EOL;
    }
} else {
    echo 'Error: Ingrese los datos Correctamente';
};
