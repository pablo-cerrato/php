<?php
$aPacientes = array();
$aPacientes[] = array(
    "dni" => "33.765.012",
    "nombre" => "Ana Acuña",
    "edad" => 45,
    "peso" => 81.50,
);
$aPacientes[] = array(
    "dni" => "23.684.385",
    "nombre" => "Gonzalo Bustamante",
    "edad" => 66,
    "peso" => 79
);
$aPacientes[] = array(
    "dni" => "11.568.778",
    "nombre" => "Martín Perez",
    "edad" => 26,
    "peso" => 77
);
$aProductos = array();

$aProductos[] = array(
    "producto" => "Cafetera Oster",
    "modelo" => "32RE",
    "stock" => "8",
);
$aProductos[] = array(
    "producto" => "Televisor Smart 22'",
    "modelo" => "Lg 52T",
    "stock" => "20",
);
$aProductos[] = array(
    "producto" => "Lavarropas Dream",
    "modelo" => "Dream 55C",
    "stock" => "0",
);
function contar($aArray){
    $contador = 0;
    foreach ($aArray as $item){
        $contador++;
    }
    return $contador;

}

$aNotas = array(9,8,9.50,4,7,8);
echo "Cantidad de productos:" . contar($aProductos);
echo "Cantidad de pacientes:" . contar($aPacientes);
echo "Cantidad de notas:" . contar($aNotas);
?>