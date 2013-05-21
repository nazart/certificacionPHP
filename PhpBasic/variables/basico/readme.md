En PHP las variables se representan con un signo de dólar seguido por el nombre de la variable. 
El nombre de la variable es sensible a minúsculas y mayúsculas.

Variables pasadas por referencia

PHP también ofrece otra forma de asignar valores a las variables: asignar por referencia. 
Esto significa que la nueva variable simplemente referencia (en otras palabras, "se convierte en un alias de" ó "
apunta a") la variable original. Los cambios a la nueva variable afectan a la original, y viceversa.
Para asignar por referencia, simplemente se antepone un signo ampersand (&) al comienzo de la variable 
cuyo valor se está asignando (la variable fuente). Por ejemplo, el siguiente segmento de código produce la salida 
'Mi nombre es Bob' dos veces (ejemplo1):



Algo importante a tener en cuenta es que sólo las variables con nombre pueden ser asignadas por referencia (ejemplo 2).

No es necesario inicializar variables en PHP, sin embargo, es una muy buena práctica. aqui les dejo algunas 
fallas de seguridadpor no inicializar las variables
http://agarzon.php.com.ve/mes-de-la-seguridad-php-inicializacion-de-variables/