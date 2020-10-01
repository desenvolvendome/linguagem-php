<?php
class BubbleSort{
  function calcula(){
		echo ">>>>> Bubble Sort <<<<< \n";
    $elementos = array(7,24,32,18,66,7,0,8);
		$controle = false;
    $aux;

    for($i=0; $i < count($elementos); $i++){
			$controle = true;
			for($j=0; $j < (count($elementos) - 1); $j++){
				if( $elementos[$j] > $elementos[$j+1]){
					$aux= $elementos[$j];
					$elementos[$j]= $elementos[$j+1];
					$elementos[$j+1]= $aux;
					$controle = false;
				}
			}

			if($controle){
				break;
			}
    }

		for($i=0; $i < count($elementos); $i++){
			echo $elementos[$i], " ";
		}
  }
}