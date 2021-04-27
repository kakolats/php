<?php

/*Générer deux nombres entiers puis les afficher dans l'ordre
croissant et dans l’ordre décroissant*/
$x=rand(1,12);
$y=rand(5,15);

//Ordre croissant
if ($x>$y){
    echo "$y --$x<br>";
}else{
    echo "$x --$y<br>";
}

//Ordre decroissant
if ($x<$y){
    echo "$y --$x<br>";
}else{
    echo "$x --$y<br>";
}

/*Générer trois nombres entiers puis les afficher dans l'ordre
croissant et dans l’ordre décroissant
*/
$j=rand(1,10);
$k=rand(2,12);
$l=rand(2,15);

/*soit l'équation ax+b=0,générer la valeur de a et de b puis donner
les solution de l'équation ci dessus.
*/
$a=rand(-10,10);
$b=rand(-12,12);
$s=(-$b/$a);
echo "$s<br>";

/*soit l'équation ax2+bx+c=0,générer la valeur de a , de b et de c
puis donner les solution de l'équation ci dessus*/

$q=0;
$q=(($b*$b)-(4*$a*$c));

if ($q<0){
    echo "l'equation n'a pas de solution<br>";
}elseif($q>0){
    $s1=(-$b-(sqrt($q)))/(2*$a); 
    $s2=(-$b+(sqrt($q)))/(2*$a);
    echo "L'équation admet deux solutions: {$s1} et {$s1} <br>";
}else{
    $s=-$b/2*$a;
    echo "L'équation a pour solution: {$s}<br>";
}

?>