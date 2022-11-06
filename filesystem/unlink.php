<?php

$filename = 'xyz.txt';

if (rand(0,1)) {
   print("Touching $filename\n");
   touch($filename);
}

if (file_exists($filename)) {
   print("Deleting $filename\n");
   unlink($filename);
}

?>
