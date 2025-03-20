<?php
/*
Lea de un registro el nombre, la edad,  el sexo y el estado civil de cualquier persona e imprimir,
sólo si la persona es hombre o mujer menor de edad o es hombre casado de cualquier edad, el nombre de la persona
y un mensaje que diga "usted no manda".en los demas casos imprimir el nombre solamente  
*/
echo "ingrese su nombre, edad, sexo(1=masculino, 2=femenino) y estado civil(1=soltero, 2=casado, 3=divorciado, 4=viudo) todos separados por coma: ";
$InDatos = trim(fgets(STDIN)); //trim elimina los espacios en blanco al inicio y al final de la cadena

$SpDatos = explode(',', $InDatos);

if (count($SpDatos) === 4) {

    $nombre = trim($SpDatos[0]);
    $edad = (int)trim($SpDatos[1]);
    $sexo = (int)trim($SpDatos[2]);
    $estado_civil = (int)trim($SpDatos[3]);

    if ($edad <= 18 || $sexo === 1 && $estado_civil === 2) {
        echo "Nombre: " . $nombre . " Usted no manda";
    } else {
        echo "Nombre: " . $nombre;
    }
} else {
    echo 'Error: Ingrese los datos correctamente.';
}
