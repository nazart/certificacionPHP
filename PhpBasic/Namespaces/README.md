namespace 
 conjunto de nombres en el cual todos los nombres son únicos.
 En un sistema operativo un ejemplo es un directorio
 evitar el conflicto de nombres  

WordPress utiliza prefijos para cada nombre “WP_”. Zend Framework usa nombres descriptivos que resultan largos nombres para clases como por ejemplo Zend_Search_Lucene_Analysis_Analyzer_Common_Text_CaseInsensitive.

se declara en la primera linea del archivo a menos que sea declare

http://hispabyte.net/2012/01/php-ejemplo-de-uso-de-los-namespace/


ele ejemplo conan en ejemplo1.php nunca debe estar en solo archivo

Observa que la sintaxis para la creación de instancias utiliza una barra diagonal inversa (\) seguida por el nombre de espacio:

$conan = new \barbarian\Conan();

Sería más del mundo real separar las dos clases Conan en sus directorios llamados “barbarian” y “obrien”, y luego referenciarlos desde otros archivos PHP. Hay tres maneras de referenciar un nombre de espacio en PHP:

    Prefijar el nombre de la clase con el namespace
    Importar el namespace
    Definir un Alias del namespace

include "barbarian/Conan.php";
$conan = new \barbarian\Conan();

include "barbarian/Conan.php";
use barbarian\Conan;  
$conan = new Conan();

include "barbarian/Conan.php";
use \barbarian\Conan as Cimmerian;
$conan = new Cimmerian();

http://www.baluart.net/articulo/los-namespaces-de-php-53-una-buena-forma-de-tener-un-codigo-mas-limpio-y-organizado
http://www.berriart.com/2011/02/15/como-usar-los-namespaces-en-php-5-3/

