<?php

function x() { }
$time_start = microtime(true);
for ($i = 0; $i < 1000000; $i++) { x(); }
$time_end = microtime(true);
$time = $time_end - $time_start;
echo 'primer resultado sin @'.$time;
?>
<p>

<?php
$time_start = microtime(true);
for ($i = 0; $i < 1000000; $i++) { 
    @x(); 
}
$time_end = microtime(true);
$time = $time_end - $time_start;
echo 'segundo resultado con @'.$time;
?> 

