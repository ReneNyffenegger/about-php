<?php

$list = [1,2,3,4];
$dict = ['num' => 42, 'txt' => 'Hello world'];

if (array_is_list($list)) { print("\$list is a list\n"); }
if (array_is_list($dict)) { print("\$dict is a list\n"); }

?>
