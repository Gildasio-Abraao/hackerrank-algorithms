<?php

function compareTriplets($a, $b)
{
  $scores = [0, 0];

  for ($i = 0; $i < count($a); $i++) {
    if ($a[$i] === $b[$i])
      continue;

    if ($a[$i] > $b[$i]) {
      $scores[0]++;
    } else {
      $scores[1]++;
    }
  }

  return $scores;
}
