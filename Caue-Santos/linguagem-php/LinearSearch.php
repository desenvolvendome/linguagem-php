<?php
class LinearSearch{
	function calcula(){
		echo "\n>>>>> LinearSearch <<<<<\n";
		$elemento = 14;
		$array = array(8, 24, 3, 9, 12, 14, 36, 65);
		$indice = -1;

    for($i = 0; $i < sizeof($array); $i++){
      if($array[$i] == $elemento){
				$indice = $i;
			}
    }
    
		echo "índice do elemento desejado: " , $indice;

  }
}