<?php

echo("Taller 1 - Elaborado por: Daniiel Castrillon");
echo("<br>");
echo("<br>");


/*
1.Hacer un programa en PHP que permita mostrar en pantalla la suma, resta, multiplicación, de dos números enteros almacenados en 2
variables diferentes. Conserve el siguiente formato de impresión

La suma de () + () = ()
La resta de ()-()= ()
La multiplicación de ()x() =()
La división de ()/()=()
*/
echo("Ejercicio # 1");
//Suma
$num1=10;
$num2=20;
$operacion=$num1+$num2;
echo("<br>");
echo("La suma de ".$num1." + ".$num2." = ".$operacion);
//Resta
$num1=20;
$num2=10;
$operacion=$num1-$num2;
echo("<br>");
echo("La resta de ".$num1." - ".$num2." = ".$operacion);
//Multiplicacion
$num1=50;
$num2=2;
$operacion=$num1*$num2;
echo("<br>");
echo("La multiplicación de ".$num1." x ".$num2." = ".$operacion);
//Division
$num1=20;
$num2=2;
$operacion=$num1/$num2;
echo("<br>");
echo("La division de ".$num1." / ".$num2." = ".$operacion);
echo("<br>");
echo("<br>");

echo("Ejercicio # 2");
echo("<br>");

$peso=85;
$estatura=1.78;
$imc=$peso/($estatura*$estatura);
echo("Señor usuario su estatura es de: ".$estatura."m"." y su pes es de : ".$peso."Kg");
echo("<br>");
if($imc<=18.4){
    echo("Señor usuario su indice de masa corporal es de:".$imc.". Por lo tanto usted tiene insuficiencia de peso");
}
elseif($imc>=18.5 && $imc<=24.9){
    echo("Señor usuario su indice de masa corporal es de:".$imc.". Por lo tanto usted tiene un peso normal");
}
elseif($imc>=25 && $imc<=29.9){
    echo("Señor usuario su indice de masa corporal es de:".$imc.". Por lo tanto usted tiene sobrepeso");
}
elseif($imc>=30 && $imc<=34.9){
    echo("Señor usuario su indice de masa corporal es de:".$imc.". Por lo tanto usted tiene Obesidad tipo 1");
}
elseif($imc>=35 && $imc<=39.9){
    echo("Señor usuario su indice de masa corporal es de:".$imc.". Por lo tanto usted tiene Obesidad tipo 2");
}
elseif($imc>=40){
    echo("Señor usuario su indice de masa corporal es de:".$imc.". Por lo tanto usted tiene Obesidad tipo 3");
}


?>