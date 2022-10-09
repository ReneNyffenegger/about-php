<?php

$jsonText = ' {
     "num" : 42,
     "txt" : "Hello world",
     "obj" : {
        "val1": "foo",
        "val2": "bar",
        "val3": "baz"
     },
     "ary": ["one", "two", "three"]
  }
';


$jsonObj = json_decode($jsonText, true);

print_r(var_dump($jsonObj));

print($jsonObj['num']         . "\n");
print($jsonObj['txt']         . "\n");
print($jsonObj['obj']['val2'] . "\n");
print($jsonObj['ary'][1]      . "\n");

?>
