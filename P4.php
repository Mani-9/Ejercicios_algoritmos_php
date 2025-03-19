<?php 
/* Leer un mismo registro de nombre y edad de cualquier persona e imprimir
El nombre solo si la persona es mayor de 18 años de lo contrario imprimir
"no puede votar"
*/ 
echo "Ingrese su nombre y su edad(separados por ','): ";
$ingreso = trim(fgets(STDIN));

// Se separa el nombre de la edad
$datos = explode(',', $ingreso);

// Excepción si no se ingresan los datos correctamente
if(count($datos) == 2 ){
    $nombre = trim($datos[0]); // Se guarda el nombre
    $edad = (int)trim($datos[1]); // Se guarda la edad

    // Se imprime el nombre y la edad si la edad es mayor a 18 años
    if($edad >= 18){
        echo 'Nombre: ' . $nombre . ' usted puede votar.' . PHP_EOL;
    } else {
        echo 'Usted no tiene la edad suficiente para votar.' . PHP_EOL;
    }
} else {
    echo 'Error: Ingrese los datos correctamente.';
}


?>