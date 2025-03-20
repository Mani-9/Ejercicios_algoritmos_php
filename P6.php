<?php
/*
Lea de un mismo registro el nombre, la edad y el sexo(1 ó 2=) y el estado civil de cualquier persona
e imprimir sólo si la persona es un hombre soltero mayor de edad, el nombre de la persona
NOTA: En el campo "estado civil" aparece grabado el número 1 en vez de "soltero",
el número 2 en vez de "casado", el número 3 en vez de "divorciado" y el número 4 en vez de "viudo"
*/
//Datos de entrada
echo "ingrese su nombre, edad, sexo(1=masculino, 2=femenino) y estado civil(1=soltero, 2=casado, 3=divorciado, 4=viudo) todos separados por coma: ";
$InDatos = trim(fgets(STDIN)); //trim elimina los espacios en blanco al inicio y al final de la cadena

$SpDatos = explode(',', $InDatos); //    explode convierte una cadena en un array

//Excepción si no se ingresan los datos correctamente
if (count($SpDatos) === 4) {
    $nombre = trim($SpDatos[0]);
    $edad = (int)trim($SpDatos[1]);
    $sexo = (int)trim($SpDatos[2]);
    $estado_civil = (int)trim($SpDatos[3]);

    if ($edad >= 18 & $sexo === 1 && $estado_civil === 1) {
        echo "Nombre: " . $nombre;
    } else {
        echo 'Error: No es hombre, no es soltero o no es mayor de edad.';
    }
} else {
    echo 'Error: Ingrese los datos correctamente.';
}
?>