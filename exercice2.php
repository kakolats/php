<?php
$x = rand(1,100);
$y = rand(1,100);
echo "x= {$x} et y ={$y} <br>";
$svg=$x;
$x=$y;
$y=$svg;

echo "x= {$x} et y ={$y}";
?>