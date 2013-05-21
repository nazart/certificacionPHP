<?php
$foo = 25;
$bar = &$foo;      // Esta es una asignación válida.
$bar = &(24 * 7);  // Inválida; referencia una expresión sin nombre.

function test()
{
   return 25;
}

$bar = &test();    // Inválido.
?>