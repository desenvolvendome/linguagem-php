<?php
include ("search.php");

$search = new SearchArray();

$arr = array(2, 3, 4, 10, 40);  
$x = 10; 
      
$result = search($arr, $x); 
if($result == -1) 
    echo "Element is not present in array"; 
else
    echo "Element is present at index ";

$result; 
  

?> 