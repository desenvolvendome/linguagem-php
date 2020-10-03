<?php
include("bubblesort.php");

$ordenar = new Bubble_Sort();

$arr = array(10, 9, 8, 7, 6, 5, 4, 3, 2, 1);
echo implode(",",$ordenar->bubble_sort($arr));








