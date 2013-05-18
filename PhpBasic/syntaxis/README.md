Etiquetas de PHP

Cuando se interpreta un archivo php busca las etiquetas de apertura y cierre <?php ?> que indica donde incia el codigo php y donde finaliza.
Tambien se pueden usar las etiquetas cortas o abreviadas (short Tag) estas solo se habilitan en el archivo de configuracion de php (php.ini) (short_open_tag = 1).

algunos ejemplos
<?php ?> // tag standar
<? ?> // short tags, es necesario habilitar short_open_tag en el php.ini
<% %> // asp tags, es nesesario habilitar  asp_tags_en el  php.ini
<script language="php"> </script> // case insensitive

Recomendaciones:
El standar PSR-1 sugierere solo usar <?php ?> o <?="2"?> (echo short tag) y no otras raviaciones.
El standar PSR-2 sugiere que solo para archivos PHP no se cierre el tag solo se use el de apertura.

Nota:

Se debe evitar el uso de etiquetas abreviadas cuando se desarrollen aplicaciones o bibliotecas que estén pensadas para su redistribución o despliegue en servidores PHP que no estén bajo su control, porque puede que las etiquetas abreviadas no estén soportadas en un servidor determinado. Por portabilidad y código redistribuible, asegúrese de no usar etiquetas abreviadas.

Nota:
En PHP 5.2 y anteriores, el intérprete no permite que un fichero contenga únicamente la etiqueta de apertura <?php. A partir de PHP 5.3 sí se permite siempre que existan uno o más caracteres espacio en blanco después de la etiqueta de apertura.

Nota:

Desde PHP 5.4, la etiqueta abreviada de echo <?= siempre es reconocida y válida, sin tener en cuenta la configuración de short_open_tag. 

Nota: 

 La etiqueta de cierre de un bloque de PHP es opcional al final de un fichero, y en algunos casos es útil omitirla cuando se usa include o require, para que no se produzcan espacios en blanco al final de los ficheros, y así se podrán añadir aún cabeceras para la respuesta posterior. También es práctico si se utiliza la salida del buffer y no se desean espacios en blanco no deseados al final de las partes generadas por ficheros incluídos. 

Comentarios 
 PHP soporta comentarios 'C', 'C++' y etilo consola Unix (estilo Perl). Por ejemplo: 





