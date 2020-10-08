<?php

function bubbleSort(){

	$arr = array(15, 4, 12, 14, 9, 3, 7, 13, 5, 10, 2, 6, 1, 11, 8);

	$aux;
	$lengthArrey = count($arr);

	for($cont = 0; $cont < $lengthArrey - 1; $cont++){

        for($index = 0; $index < $lengthArrey-$cont-1; $index++){

            if ($arr[$index] > $arr[$index+1]){

                $aux = $arr[$index];
                $arr[$index] = $arr[$index+1];
                $arr[$index+1] = $aux;
            }
        }
    }

	foreach($arr as $a){
		echo $a;
        echo ' ';
    };
}

?>