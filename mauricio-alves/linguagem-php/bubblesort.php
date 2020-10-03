<?php

class Bubble_Sort{

  function bubble_sort($array)
  {
    for($i = 0; $i < count($array); $i++)
    {
      for($j = 0; $j < count($array) - 1; $j++)
      {
        if($array[$j] > $array[$j + 1])
        {
          $aux = $array[$j];
          $array[$j] = $array[$j + 1];
          $array[$j + 1] = $aux;
        }
      }
    }
     return $array;
  }
}
