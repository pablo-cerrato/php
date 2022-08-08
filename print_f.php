<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
//definicion
function print_f($variable)
{
    if (is_array ($variable)){
        $archivo = fopen('datos.txt', 'a+');
        
        //si es un array lo recorro y guardo el contenido en el archivos datos.txt 
        foreach($variable as $item) {
            
            fwrite($archivo,$item . "\n");

        }
        fclose($archivo);
    } else {
        //entonces es string, guardo el contenido en el archivo datos.txt
        file_put_contents("datos.txt",$variable);
    }
    echo "Archivo generado";
}
//uso
$aNotas = array(8,5,7,9,10);
$msg = "Este es un mensaje!". "<br>";
print_f($aNotas);


?>