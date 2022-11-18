<?php

$dict = [];


$dict += [ 'numbers'         => [1, 2, 3],
           'numbers-spelled' => ['one', 'two', 'XXX', 'three']
         ];


$dict['numbers'        ][] = 4;
$dict['numbers-spelled'][] ='four';

$dict['words'][] = 'foo';
$dict['words'][] = 'bar';
$dict['words'][] = 'xxx';
$dict['words'][] = 'baz';


#
#  Remove an element from the dictionary
#
unset($dict['words'][2]);
unset($dict['numbers-spelled'][2]);

foreach ($dict as $k => $v) {
   print("$k: " . join(', ', $v) . "\n");
}

?>
