<?php
  require_once("triangle.php");
  require_once("circle.php");
  require_once("square.php");
  $triangle=new triangle(1, 5);
  $circle=new circle(14);
  $square=new square(7);

echo $triangle->tostring();
echo $circle->tostring();
echo $square->tostring();
echo $triangle->welcome();
echo $circle->welcome();
echo $square->welcome();

?>

