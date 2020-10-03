<?php
class SearchArray{

  function search($arr, $x) 
  {
    $n = sizeof($arr); 
    for($i = 0; $i < $n; $i++) 
    { 
      if($arr[$i] == $x) 
      return $i; 
    } 
    return -1; 
  } 
}
?>


