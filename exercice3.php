<?php 
$a=[rand(0,10),rand(0,10)];
$b=[rand(-5,5),rand(5,5)];
$distance=sqrt(pow($b[0]-$a[0],2)+pow($b[1]-$a[1],2));
echo "$distance";
?>