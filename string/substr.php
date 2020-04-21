<?php

header('Content-Type: text/plain');

$str='0123456789';

print( substr($str,  4    ) . "\n" );  // print string after fourth character                 : 456789
print( substr($str,  4, 3 ) . "\n" );  // print 3 characters starting after fourth character  : 456
print( substr($str, -5    ) . "\n" );  // print last 5 characters                             : 56789
print( substr($str, -5, 3 ) . "\n" );  // print 3 characters starting after 5th last character: 567

?>
