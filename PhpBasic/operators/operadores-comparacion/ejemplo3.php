<?php
//Tabla de comparaciones
$tests = array();
$tests['==']  = create_function('$a, $b', 'return $a==$b;');
$tests['==='] = create_function('$a, $b', 'return $a===$b;');
$tests['!='] = create_function('$a, $b', 'return $a!=$b;');
$tests['<>'] = create_function('$a, $b', 'return $a<>$b;');
$tests['!=='] = create_function('$a, $b', 'return $a!==$b;');
$tests['<']   = create_function('$a, $b', 'return $a<$b;');
$tests['>']   = create_function('$a, $b', 'return $a>$b;');
$tests['<=']  = create_function('$a, $b', 'return $a<=$b;');
$tests['>=']  = create_function('$a, $b', 'return $a>=$b;');

$comparison = array();
$comparison['TRUE'] = true;
$comparison['FALSE'] = false;
$comparison['1'] = 1;
$comparison['0'] = 0;
$comparison['-1'] = -1;
$comparison['3,14'] = pi();
$comparison['"1"'] = '1';
$comparison['"0"'] = '0';
$comparison['"-1"'] = '-1';
$comparison['NULL'] = null;
$comparison['array()'] = array();
$comparison['"php"'] = 'php';
       
print '<h1>PHP version '.PHP_VERSION.' tabla de tipo de comparaciones</h1>';
       
foreach ($tests as $test=>$function) {
    print "<h2>Comparamos con $test</h2>";
    print "<table border='1'>";
    print "<tr>";
    print "<th>&nbsp;</th>";
    foreach (array_keys($comparison) as $name) {
        print "<th>$name</th>";
    }
    print "</tr>";
    foreach ($comparison as $arg_1_name => $arg_1_value) {
        print '<tr>';
        print "<th>$arg_1_name</th>";
        foreach ($comparison as $arg_2_value) {
            print '<td>';
            print $function($arg_1_value, $arg_2_value)==true ?
                        '<span style="color:#00F;">TRUE</span>' : '<span style="color:#F00;">FALSE</span>';
            print '</td>';
        }
        print "</tr>";
    }
    print "</table>";
}
