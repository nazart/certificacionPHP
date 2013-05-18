<h1>Operadores de comparación</h1>
Los operadores de comparación, como su nombre lo indica, permiten comparar dos valores.
<table class="doctable table">
   <caption><strong>Operadores de comparación</strong></caption>
   
    <thead>
     <tr>
      <th>Ejemplo</th>
      <th>Nombre</th>
      <th>Resultado</th>
     </tr>

    </thead>

    <tbody class="tbody">
     <tr>
      <td>$a == $b</td>
      <td>Igual</td>
      <td><strong><code>TRUE</code></strong> si <var class="varname"><var class="varname">$a</var></var> es igual a <var class="varname"><var class="varname">$b</var></var> después de la manipulación de tipos.</td>
     </tr>

     <tr>
      <td>$a === $b</td>
      <td>Idéntico</td>
      <td>
       <strong><code>TRUE</code></strong> si <var class="varname"><var class="varname">$a</var></var> es igual a <var class="varname"><var class="varname">$b</var></var>, y son del mismo
       tipo.
      </td>
     </tr>

     <tr>
      <td>$a != $b</td>
      <td>Diferente</td>
      <td><strong><code>TRUE</code></strong> si <var class="varname"><var class="varname">$a</var></var> no es igual a <var class="varname"><var class="varname">$b</var></var> después de la manipulación de tipos.</td>
     </tr>

     <tr>
      <td>$a &lt;&gt; $b</td>
      <td>Diferente</td>
      <td><strong><code>TRUE</code></strong> si <var class="varname"><var class="varname">$a</var></var> no es igual a <var class="varname"><var class="varname">$b</var></var> después de la manipulación de tipos.</td>
     </tr>

     <tr>
      <td>$a !== $b</td>
      <td>No idéntico</td>
      <td>
       <strong><code>TRUE</code></strong> si <var class="varname"><var class="varname">$a</var></var> no es igual a <var class="varname"><var class="varname">$b</var></var>, o si no son del mismo
       tipo.
      </td>
     </tr>

     <tr>
      <td>$a &lt; $b</td>
      <td>Menor que</td>
      <td><strong><code>TRUE</code></strong> si <var class="varname"><var class="varname">$a</var></var> es estrictamente menor que <var class="varname"><var class="varname">$b</var></var>.</td>
     </tr>

     <tr>
      <td>$a &gt; $b</td>
      <td>Mayor que</td>
      <td><strong><code>TRUE</code></strong> si <var class="varname"><var class="varname">$a</var></var> es estrictamente mayor que <var class="varname"><var class="varname">$b</var></var>.</td>
     </tr>

     <tr>
      <td>$a &lt;= $b</td>
      <td>Menor o igual que</td>
      <td><strong><code>TRUE</code></strong> si <var class="varname"><var class="varname">$a</var></var> es menor o igual que <var class="varname"><var class="varname">$b</var></var>.</td>
     </tr>

     <tr>
      <td>$a &gt;= $b</td>
      <td>Mayor o igual que</td>
      <td><strong><code>TRUE</code></strong> si <var class="varname"><var class="varname">$a</var></var> es mayor o igual que <var class="varname"><var class="varname">$b</var></var>.</td>
     </tr>

    </tbody>
   
  </table>
<br>

<h1>Operador ternario</h1>

Otro operador condicional es el operador "?:" (o ternario). 

<div id="example-120" class="example">
     <p><strong>Ejemplo #2 Asignación de un valor predeterminado</strong></p>
     <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000">
<span style="color: #0000BB">&lt;?php<br></span><span style="color: #FF8000">//&nbsp;Ejemplo&nbsp;de&nbsp;uso&nbsp;para:&nbsp;Operador&nbsp;Ternario<br></span><span style="color: #0000BB">$action&nbsp;</span><span style="color: #007700">=&nbsp;(empty(</span><span style="color: #0000BB">$_POST</span><span style="color: #007700">[</span><span style="color: #DD0000">'action'</span><span style="color: #007700">]))&nbsp;?&nbsp;</span><span style="color: #DD0000">'default'&nbsp;</span><span style="color: #007700">:&nbsp;</span><span style="color: #0000BB">$_POST</span><span style="color: #007700">[</span><span style="color: #DD0000">'action'</span><span style="color: #007700">];<br><br></span><span style="color: #FF8000">//&nbsp;Lo&nbsp;anterior&nbsp;es&nbsp;idéntico&nbsp;a&nbsp;esta&nbsp;sentencia&nbsp;if/else<br></span><span style="color: #007700">if&nbsp;(empty(</span><span style="color: #0000BB">$_POST</span><span style="color: #007700">[</span><span style="color: #DD0000">'action'</span><span style="color: #007700">]))&nbsp;{<br>&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$action&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">'default'</span><span style="color: #007700">;<br>}&nbsp;else&nbsp;{<br>&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$action&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$_POST</span><span style="color: #007700">[</span><span style="color: #DD0000">'action'</span><span style="color: #007700">];<br>}<br><br></span><span style="color: #0000BB">?&gt;</span>
</span>
</code></div>
     </div>

    </div>