<?php

$a = ($b = 4) + 5; // ahora $a es igual a 9 y $b se ha establecido en 4.

$a=2;$b=4;
echo ($a += $b)."\n";
$a=2;$b=4;
echo ($a = $a + $b)."\n";    //Addition

$a=2;$b=4;
echo ($a -= $b)."\n";     
$a=2;$b=4;
echo ($a = $a - $b)."\n";     //Subtraction

$a=2;$b=4;
echo ($a *= $b)."\n";
$a=2;$b=4;
echo ($a = $a * $b)."\n";     //Multiplication

$a=2;$b=4;
echo ($a /= $b)."\n";
$a=2;$b=4;
echo ($a = $a / $b)."\n";    //Division

$a=2;$b=4;
echo ($a %= $b)."\n";
$a=2;$b=4;
echo ($a = $a % $b)."\n";    //Modulus

