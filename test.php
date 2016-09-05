<?php

$words = explode(" ", "Mahender Singh");
$acronym = "";

foreach ($words as $w) {
  $acronym .= $w[0];
}
echo $acronym;