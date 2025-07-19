<?php

function diagonalDifference($arr)
{
  $x = 0;
  $y = 0;

  for ($i = 0; $i < count($arr); $i++) {
    $x += $arr[$i][$i];
    $y += $arr[$i][(count($arr) - 1) - $i];
  }

  return abs($x - $y);
}
