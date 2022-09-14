<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tp2_backend</title>
</head>
<body>

<?php
    $n1 = 5;
    if ($n1 > 0) {
        echo "El numero $n1 es positivo";
    }
    else {
        echo "El numero $n1 es negativo";
    }
?>
<br>
<hr>
<?php
    $n2 = 8;
    if ($n2 > 1 && $n2 <10) {
        echo "El numero $n2 se encuentra entre el 1 y el 10";}
    else {
        echo "el numero $n2 no se encuentra entre los limites";}
?>
<br>
<hr>
<?php
    $n3 = 12;
    if ($n3 >10 || $n3 <2) {
        echo "El numero $n3 es mayor que 10 o es menor que 2";}
    else {
        echo "el numero $n3 no es valido, no cumple con las condiciones";}
?>
<br>
<hr>
<?php
    $numero1 = 8;
    $numero2 = 5;
    echo "Los numeros son $numero1 y $numero2"
?>
<br>
<?php
    if($numero1 > $numero2){
        echo "suma: ". ($numero1+$numero2);
        echo " resta: ". ($numero1-$numero2);
    }
    elseif ($numero1 < $numero2){
        echo "multiplicacion: ". ($numero1*$numero2);
        echo "division entera: ". floor($numero1/$numero2);
        echo "resto: ". ($numero1%$numero2);
    }
    else {
        echo "los numeros ingresados son iguales";
    }
?>
<br><hr>
<?php
    $numero1 = 5;
    $numero2 = 8;
        if($numero1 > $numero2){
            echo "suma: ". ($numero1+$numero2);
            echo " resta: ". ($numero1-$numero2);
        }
        elseif ($numero1 < $numero2){
            echo "multiplicacion: ". ($numero1*$numero2);
            echo " division entera: ". floor($numero1/$numero2);
            echo " resto: ". ($numero1%$numero2);
        }
        else {
            echo "los numeros ingresados son iguales";
        }
?>
<br><hr>
<?php
    $numero1 = 5;
    $numero2 = 5;
        if($numero1 > $numero2){
            echo "suma: ". ($numero1+$numero2);
            echo " resta: ". ($numero1-$numero2);
        }
        elseif ($numero1 < $numero2){
            echo "multiplicacion: ". ($numero1*$numero2);
            echo " division entera: ". floor($numero1/$numero2);
            echo " resto: ". ($numero1%$numero2);
        }
        else {
            echo "los numeros ingresados son iguales";
        }
?>


    
</body>
</html>