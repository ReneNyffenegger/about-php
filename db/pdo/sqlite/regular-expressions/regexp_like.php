<?php

header('Content-Type: text/plain');

$db = new PDO("sqlite::memory:");

$db->exec('create table T (col_1, col_2)');
$db->exec("insert into T values
( 1, 'one'  ),
( 2, 'two'  ),
( 3, 'three'),
( 4, 'four' ),
( 5, 'five' )");

$db->sqliteCreateFunction('regexp_like', 'preg_match', 2);

print("Find words that start with t and end on a vowel\n\n");

   $stmt = $db->query("select * from T where regexp_like('/^t.*[aeiou]$/', col_2)");
   while ($rec = $stmt->fetch()) {
      printf("  %d %s\n", $rec['col_1'], $rec['col_2']);
   }

print("\n\nFind words with two equal consecutive letters\n\n");

   $stmt = $db->query("select * from T where regexp_like('/(.)\\1/', col_2)");
   while ($rec = $stmt->fetch()) {
      printf("  %d %s\n", $rec['col_1'], $rec['col_2']);
   }

?>
