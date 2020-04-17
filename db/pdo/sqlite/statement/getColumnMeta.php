<?php

$db = new PDO("sqlite::memory:");

$db->exec('create table T (
   col_1 integer,
   col_2 text,
   col_3 real,
   col_4 blob
)');

$db->exec("insert into T values (   1 , 'one', 1.1, 'xyz')");
$db->exec("insert into T values ('two', 2.2  ,   2, x'deadbeef')");

$stmt = $db->prepare('select * from T');
$stmt->execute();

$colCount = $stmt->columnCount();
print("Table has $colCount columns.<p>");

printMetaInfo($stmt);
printMetaInfo($stmt);

function printMetaInfo($stmt) {

   $colCount = $stmt->columnCount();

   $rec = $stmt->fetch();

   print("<hr><table border='1'>");
   print("<tr><td>Name</td><td>Type</td><td>Value</td></tr>\n");

   for ($col=0; $col < $colCount ; $col++) {
      $meta = $stmt->getColumnMeta($col);
      printf("<tr><td>%s</td><td>%s</td><td>%s</td></tr>", $meta['name'], $meta['native_type'], $rec[$meta['name']]);
   }

   print("</table>");
}


?>
