<?php
$a = 3;
$b = &$a; // $b es una referencia para $a

print "$a\n"; // muestra 3
print "$b\n"; // muestra 3

$a = 4; // cambia $a

print "$a\n"; // muestra 4
print "$b\n"; // muestra 4 también, dado que $b es una referencia para $a, la cual ha
  