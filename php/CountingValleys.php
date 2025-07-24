<?php

function countingValleys($steps, $path)
{
  $sea_level = 0;
  $total = 0;

  foreach (str_split($path) as $p) {
    if ($p === "D") {
      $sea_level--;
    }

    if ($p === "U") {
      if (($sea_level + 1) == 0) {
        $total++;
      }

      $sea_level++;
    }
  }

  return $total;
}