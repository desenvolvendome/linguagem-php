<?php

function linearSearch($wanted){

	$arr = array(15, 4, 12, 14, 9, 3, 7, 13, 5, 10, 2, 6, 1, 11, 8);
	$cont = 0;
	$lengthArr = count($arr);

	while($cont < $lengthArr){
		if ($arr[$cont] == $wanted){
			echo "\n";
			return $cont;
        }
		$cont++;
	}
	echo "This item is not in the list";
}

?>