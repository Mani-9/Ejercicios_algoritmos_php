<?php
//Leer de un mismo registro el nombre y la edad de cualquier persona e imprimirlo

//Se solicita el nombre y la edad de la persona
echo "Ingrese su nombre y su edad(separados por una ','): ";
$ingreso = trim(fgets(STDIN));

//Se separa el nombre de la edad
$datos = explode(',', $ingreso);

//exepcion si no se ingresan los datos correctamente
if(count($datos) ==2){
    $nombre = trim($datos[0]); //Se guarda el nombre
    $edad = (int) trim($datos[1]); //Se convierte la edad a entero y se guarda  

    //Se imprime el nombre y la edad
    echo 'Nombre: '. $nombre . PHP_EOL;
    echo 'Edad: ' . $edad . PHP_EOL;
}else{
    echo 'Error: Ingrese los datos Correctamente';
} 

?>