<?php 
function maximo($vector){
    $valorMaximo = 0;
    foreach($vector as $valor){
        if($valorMaximo < $valor){
            $valorMaximo = $valor;
        }
        
    }
              
    return $valorMaximo;

}

$aNotas = array(8,4,5,3,9,1);
echo "La nota maxima es " . maximo($aNotas). "<br>";
?>