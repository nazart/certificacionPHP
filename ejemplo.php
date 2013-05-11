<?php

function assing ($e){
$variable1 = '123';
$variable2 = '12';
$variable3 = 'asd';
return $$e;
}

echo assing('variable1');
echo '<p>';
echo assing('variable2');
echo '<p>';
echo assing('variable3');

?>
