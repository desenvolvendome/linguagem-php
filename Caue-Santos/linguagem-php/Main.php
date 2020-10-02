<?php
include("BubbleSort.php");
include("Fatorial.php");
include("LinearSearch.php");

$bubble = new BubbleSort();
$bubble->calcula();

$fatorial = new Fatorial();
$fatorial->calcula();

$linearSearch = new LinearSearch();
$linearSearch->calcula();