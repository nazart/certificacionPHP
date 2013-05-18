<?php
$a = 'a';
$b = 'b';

$a .= $b .= "foo";

echo $a,"\n",$b;