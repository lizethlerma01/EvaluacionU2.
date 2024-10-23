<?php
/*
Cbtis89
Examen2LermaHernández.php
Programa que almacena 5 precios de articulos, para que por medio de un ciclo calcule el IVA. Posteriormente se calcula un descuento del 10% a todos los elementos.Finalmente se obtienen los resultados y imprime todos los resultados de todos los arreglos.
Lerma Hernández Karla Lizeth
Programación 3°A T.M
*/

$arrayPrecios=array(500,400,200,700,100);

$arrayIVA=array();
$arraySubtotal=array();
$arrayDescuentos=array();
$arrayTotal=array();
$iva=0.16;
$descuento=0.10;
$longitud=count($arrayPrecios);

for ($j=0; $j<$longitud; $j++) {
    $arrayIVA[$j]=$arrayPrecios[$j]/$iva[$j];
    $arraySubtotal[$j]=$arrayPrecios[$j]+$arrayIVA[$j];
    $arrayDescuentos[$j]=$arrayPrecios[$j]/$descuento[$j];
	}

echo "ARREGLO PRECIOS";
echo "<br>";
echo $arrayPrecios;
echo "<br>", "<br>";

echo "ARREGLO IVA";
echo "<br>";
echo $arrayIVA;
echo "<br>", "<br>";


?>
