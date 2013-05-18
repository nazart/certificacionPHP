<?php
echo memory_get_usage();
ini_set( 'MAX_EXEC_TIME', 120 );
ob_start( );

$num_tests = 10;
$startFirst = $startSecond = $endFirst = $endSecond = $startFirstMemory = $endFirstMemory = $startSecondMemory = $endSecondMemory = $someVal = 0;
$times = array( '$i++' => array( 'time' => 0, 'memory' => 0 ), '++$i' => array( 'total' => 0, 'memory' => 0 ) );

for( $j = 0; $j < $num_tests; ++$j )
{
        for( $i = 0, $startFirstMemory = memory_get_usage( ), $startFirst = microtime( true ); $i < 10000000; $i++ ){ $someval = 2; }
        $endFirstMemory = memory_get_usage( );
        $endFirst = microtime( true );

        for( $i = 0, $startSecondMemory = memory_get_usage( ), $startSecond = microtime( true ); $i < 10000000; ++$i ){ $someval = 2; }
        $endSecondMemory = memory_get_usage( );
        $endSecond = microtime( true );

        $times[ '$i++' ][ $j ] = array( 'startTime' => $startFirst, 'endTime' => $endFirst, 'startMemory' => $startFirstMemory, 'endMemory' => $endFirstMemory );
        $times[ '++$i' ][ $j ] = array( 'startTime' => $startSecond, 'endTime' => $endSecond, 'startMemory' => $startSecondMemory, 'endMemory' => $endSecondMemory );
}

for( $i = 0; $i < $num_tests; ++$i )
{
        $times[ '$i++' ][ 'time' ] += ( $times[ '$i++' ][ $i ][ 'endTime' ] - $times[ '$i++' ][ $i ][ 'startTime' ] );
        $times[ '++$i' ][ 'time' ] += ( $times[ '++$i' ][ $i ][ 'endTime' ] - $times[ '++$i' ][ $i ][ 'startTime' ] );
        $times[ '$i++' ][ 'memory' ] += ( $times[ '$i++' ][ $i ][ 'endMemory' ] - $times[ '$i++' ][ $i ][ 'startMemory' ] );
        $times[ '++$i' ][ 'memory' ] += ( $times[ '++$i' ][ $i ][ 'endMemory' ] - $times[ '++$i' ][ $i ][ 'startMemory' ] );
}

echo 'There were ' . $num_tests . ' tests conducted, here\'s the totals<br /><br />
$i++ took ' . $times[ '$i++' ][ 'time' ] . ' seconds and ' . $times[ '$i++' ][ 'memory' ] . ' bytes<br />
++$i took ' . $times[ '++$i' ][ 'time' ] . ' seconds and ' . $times[ '++$i' ][ 'memory' ] . ' bytes';

ob_end_flush( );

?>