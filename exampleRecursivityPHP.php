<?php

/**
* Suma todos los elementos numéricos de un array
* @param	array	$array	Array con los elementos a sumar
* @return	Suma total
*/
function sumaArray($array)
{
	$suma = 0;
   
	foreach($array as $item)
		$suma += (is_array($item)) ? sumaArray($item) : $item;
	
	return $suma;
}

// Testing
echo "SUMA 1: ".sumaArray(array(1,4,3,0))."\n";
echo "SUMA 2: ".sumaArray(array(1,2,array(5,8),4))."\n";
echo "SUMA 3: ".sumaArray(array("1"=>9,4,3,0))."\n";
echo "SUMA 4: ".sumaArray(array("1.25", 2.5))."\n";
echo "SUMA 5: ".sumaArray(array(1,2,3,5,"8",13),array(21,"34"),"44.5",44.5))."\n";
