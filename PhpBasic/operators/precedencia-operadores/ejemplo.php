<?php
$a = 3 * 3 % 5; // (3 * 3) % 5 = 4
$a = true ? 0 : true ? 1 : 2; // (true ? 0 : true) ? 1 : 2 = 2

$a = 1;
$b = 2;
$a = $b += 3; // $a = ($b += 3) -> $a = 5, $b = 5

// mezclar ++ y + produce un comportamiento indefinido
$a = 1;
$b = 1;
echo ++$a + $a++."\n"; // puede mostrar 4 o 5 
echo ++$a."\n";
echo $b++."\n";
echo $a++ + ++$a;
