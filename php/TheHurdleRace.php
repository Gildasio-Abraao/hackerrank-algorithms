<?php

function hurdleRace($k, $height)
{
  $total = max($height) > $k ? max($height) - $k : 0;

  return $total;
}
