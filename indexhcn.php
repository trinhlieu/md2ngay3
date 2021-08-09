<?php
include "hcn.php";

$width  = 15;
$height = 25;
$rectangle = new Rectangle($width, $height);
echo $rectangle->width . "<br>";
echo $rectangle->height . "<br>";

$rectangle->height = 35;
$rectangle->width = 25;

echo $rectangle->height . "<br>";
echo $rectangle->width . "<br>";
echo $rectangle->getPerimeter() . "<br>";
echo $rectangle->getArea() . "<br>";
echo ("Your Rectangle". $rectangle->display());
