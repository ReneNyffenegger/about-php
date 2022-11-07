<?php

$jsonTxt = '{
  "num":  42,
  "txt": "Hello world",
  "ary": [1,2,3,4],
  "obj": {}
}';

#
#  Use true for second parameter so
#  that json_decode returns an
#  associative array (aka dictionary):
#
$json = json_decode($jsonTxt, true);

#
#  The keys (or the dictionary) is
#  sorted in place!
#
ksort($json);

#
#  Iterate over each key.
#
foreach(array_keys($json) as $key) {
   print("$key\n");
}

?>
