<?php


function migratoryBirds($arr)
{
  $x = array_count_values($arr);

  return min(array_keys($x, max($x)));
}
