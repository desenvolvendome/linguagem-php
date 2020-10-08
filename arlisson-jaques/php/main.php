<?php

require_once("algorithms/bubblesort.php");
require_once("algorithms/linearsearch.php");
require_once("algorithms/factorial.php");


bubblesort();
printf("\nFactorial: %d", factorial(2));
printf("Position: %d", linearSearch(7));

?>