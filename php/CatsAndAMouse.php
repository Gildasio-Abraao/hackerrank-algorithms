<?php

function catAndMouse($x, $y, $z)
{
  $catA = $x - $z;
  $catB = $y - $z;

  if (abs($catA) === abs($catB)) {
    return "Mouse C";
  }

  if (abs($catA) < abs($catB)) {
    return "Cat A";
  } else {
    return "Cat B";
  }
}