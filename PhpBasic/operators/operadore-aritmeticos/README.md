<table class="doctable table">
   <caption><strong>Operadores aritméticos</strong></caption>
    <thead>
     <tr>
      <th>Ejemplo</th>
      <th>Nombre</th>
      <th>Resultado</th>
     </tr>
    </thead>
    <tbody class="tbody">
     <tr>
      <td>-$a</td>
      <td>Negación</td>
      <td>Opuesto de <var class="varname"><var class="varname">$a</var></var>.</td>
     </tr>
     <tr>
      <td>$a + $b</td>
      <td>Adición</td>
      <td>Suma de <var class="varname"><var class="varname">$a</var></var> y <var class="varname"><var class="varname">$b</var></var>.</td>
     </tr>
     <tr>
      <td>$a - $b</td>
      <td>Sustracción</td>
      <td>Diferencia de <var class="varname"><var class="varname">$a</var></var> y <var class="varname"><var class="varname">$b</var></var>.</td>
     </tr>
     <tr>
      <td>$a * $b</td>
      <td>Multiplicación</td>
      <td>Producto de <var class="varname"><var class="varname">$a</var></var> y <var class="varname"><var class="varname">$b</var></var>.</td>
     </tr>

     <tr>
      <td>$a / $b</td>
      <td>División</td>
      <td>Cociente de <var class="varname"><var class="varname">$a</var></var> y <var class="varname"><var class="varname">$b</var></var>.</td>
     </tr>

     <tr>
      <td>$a % $b</td>
      <td>Módulo</td>
      <td>Resto de <var class="varname"><var class="varname">$a</var></var> dividido por <var class="varname"><var class="varname">$b</var></var>.</td>
     </tr>
    </tbody>
  </table>


El operador de división ("/") devuelve un valor flotante a menos que los dos operandos sean integers (o strings que se conviertan a integers) y los números sean divisibles, en cuyo caso será devuelto un valor integer.

Los operandos del módulo se convierten en integers (por extracción de la parte decimal) antes del procesamiento.

El resultado del operador módulo % tiene el mismo signo que el dividendo — es decir, el resultado de $a % $b tendrá el mismo signo que $a. Por ejemplo: 