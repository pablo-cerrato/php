<?php
if($_POST){
    $ValorA=$_POST['ValorA'];
    $ValorB=$_POST['ValorB'];

    $suma=$ValorA+$ValorB;
    $resta=$ValorA-$ValorB;
    $division=$ValorA/$ValorB;
    $multiplicacion=$ValorA*$ValorB;

    echo "<br>"."El resultado de la suma es ".$suma;
    echo "<br>"."El resultado de la resta es ".$resta;
    echo "<br>"."El resultado de la division es ".$division;
    echo "<br>"."El resultado de la multiplicacion es ".$multiplicacion;

    if($ValorA==$ValorB){
        echo "<br>"."El resultado en la resta siempre será cero ";
    }
    if(($ValorA<$ValorB)&&($ValorA-$ValorB)){
        echo "<br>"."En la resta el número no es entero ";
    }
    if(($ValorA==$ValorB)&&($ValorA/$ValorB)){
        echo "<br>"."El resultado en la division siempre será 1 ";
    }
    if(($ValorA*$ValorB)&&($ValorA==rand(2,4))){
        echo "<br>"."El número es par en la multiplicación ";
    }else{
        echo "<br>"."El número es impar en la multiplicación ";
    }
    if(($ValorA>9)||($ValorB>9)){
        echo "<br>"."El resultado en la suma tiene dos digitos ";
    }
}


?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="unejercicio.php" method="POST">
        <label for="valora">Valor A</label>
        <input type="text" name="ValorA" id="valora">
        <label for="valorb">Valor B</label>
        <input type="text" name="ValorB" id="valorb">
        <button type="submit" value="calcular">Enviar</button>
    </form>
    
</body>
</html>