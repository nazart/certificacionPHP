 Los operadores bit a bit permiten la evaluación y la manipulación de bits específicos dentro de un integer. 

<table class="doctable table">
   <caption><strong>Operadores bit a bit</strong></caption>
   
    <thead>
     <tr>
      <th>Ejemplo</th>
      <th>Nombre</th>
      <th>Resultado</th>
     </tr>

    </thead>

    <tbody class="tbody">
     <tr>
      <td><strong class="userinput"><code>$a &amp; $b</code></strong></td>
      <td>And (y)</td>
      <td>Los bits que están activos en ambos <var class="varname"><var class="varname">$a</var></var> y <var class="varname"><var class="varname">$b</var></var> son activados.</td>
     </tr>

     <tr>
      <td><strong class="userinput"><code>$a | $b</code></strong></td>
      <td>Or (o inclusivo)</td>
      <td>Los bits que están activos ya sea en <var class="varname"><var class="varname">$a</var></var> o en <var class="varname"><var class="varname">$b</var></var> son activados.</td>
     </tr>

     <tr>
      <td><strong class="userinput"><code>$a ^ $b</code></strong></td>
      <td>Xor (o exclusivo)</td>
      <td>Los bits que están activos en <var class="varname"><var class="varname">$a</var></var> o en <var class="varname"><var class="varname">$b</var></var>, pero no en ambos, son activados.</td>
     </tr>

     <tr>
      <td><strong class="userinput"><code>~ $a</code></strong></td>
      <td>Not (no)</td>
      <td>Los bits que están activos en $a son desactivados, y viceversa.
       Bits that are set in <var class="varname"><var class="varname">$a</var></var> are not set, and vice versa.
      </td>
     </tr>

     <tr>
      <td><strong class="userinput"><code>$a &lt;&lt; $b</code></strong></td>
      <td>Shift left(desplazamiento a izquierda)</td>
      <td>
       Desplaza los bits de <var class="varname"><var class="varname">$a</var></var>, <var class="varname"><var class="varname">$b</var></var> pasos a la izquierda (cada paso
       quiere decir "multiplicar por dos").
      </td>
     </tr>

     <tr>
      <td><strong class="userinput"><code>$a &gt;&gt; $b</code></strong></td>
      <td>Shift right (desplazamiento a derecha)</td>
      <td>
       Desplaza los bits de <var class="varname"><var class="varname">$a</var></var>, <var class="varname"><var class="varname">$b</var></var> pasos a la derecha (cada paso
       quiere decir "dividir por dos").
      </td>
     </tr>

    </tbody>
   
  </table>