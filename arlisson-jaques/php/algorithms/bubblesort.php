<?php

function bubbleSort(){

	$arr = array(15, 4, 12, 14, 9, 3, 7, 13, 5, 10, 2, 6, 1, 11, 8);

	$aux;
	$lengthArrey = count($arr);

	for($i = 0; $i < $lengthArrey - 1; $i++){

        for($j = 0; $j < $lengthArrey-$i-1; $j++){

            if ($arr[$j] > $arr[$j+1]){
				
                $aux = $arr[$j];
                $arr[$j] = $arr[$j+1];
                $arr[$j+1] = $aux;
            }
        }
    }

	foreach($arr as $a){
        echo $a, ' ';
    };

}

?>