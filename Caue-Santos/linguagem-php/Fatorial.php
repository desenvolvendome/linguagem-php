<?php
class Fatorial{
	function calcula(){
		echo "\n >>>>> Fatorial <<<<< \n";
		$fatorial = 1;
		$numero = 5;

    for($i = $numero; $i > 1; $i--){
      $fatorial *= $numero;
      $numero--;                 
    }

		echo $fatorial;

	}
}