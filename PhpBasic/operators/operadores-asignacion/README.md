El operador básico de asignación es "=". Se podría inclinar a pensar primero que 
es como un "igual a". Pero No lo es. Realmente significa que el operando de la izquierda 
se establece con el valor de la expresión de la derecha (es decir, "<strong>se define como</strong>"). 
<p>
 El valor de una expresión de asignación es el valor asignado. Es decir, 
el valor de "$a = 3" es de 3. Esto permite hacer algunas cosas intrincadas: 

<?php

$a = ($b = 4) + 5; // ahora $a es igual a 9 y $b se ha establecido en 4.

?>



Además del operador básico de asignación, existen "operadores combinados" 
para todos los de aritmética binaria, unión de arrays y operadores de 
strings que permiten usar un valor en una expresión y entonces establecer 
su valor como el resultado de esa expresión. Por ejemplo:

<p>

<?php

$a = 3;
$a += 5; // establece $a en 8, como si se hubiera dicho: $a = $a + 5;
$b = "Hola ";
$b .= "ahí!"; // establece $b en "Hola ahí!", al igual que $b = $b . "ahí!";

?>

<strong>Asignación por referencia</strong>

La asignación por referencia también está soportada, utilizando la sintaxis 
"$var = &$othervar;". Asignación por referencia significa que ambas variables 
terminan apuntando a los mismos datos y nada es copiado en ninguna parte. 


<?php
$a = 3;
$b = &$a; // $b es una referencia para $a

print "$a\n"; // muestra 3
print "$b\n"; // muestra 3

$a = 4; // cambia $a

print "$a\n"; // muestra 4
print "$b\n"; // muestra 4 también, dado que $b es una referencia para $a, la cual ha
              // sido cambiada
?>







