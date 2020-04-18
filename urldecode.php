<?php
print('<html><head>
<meta charset="utf-8">
<title>urldecode</title></head><body>
');

printf('<form>
   <input type="text" name="words" value="%s" />
   <input type="submit"/>
</form>', htmlentities(
           array_key_exists('words', $_GET) ? $_GET ['words'] : "O'briän & company"
          )
);

print("<hr><table border=1 style='border-collapse:collapse'>");
printf("<tr><td>\$_GET['words']</td><td>%s</td></tr>"                     ,           htmlentities(array_key_exists('words'       , $_GET   ) ? $_GET   ['words'       ] : "") );
printf("<tr><td>\$_SERVER['QUERY_STRING']</td><td>%s</td></tr>"           ,           htmlentities(array_key_exists('QUERY_STRING', $_SERVER) ? $_SERVER['QUERY_STRING'] : "") );
printf("<tr><td>urldecode(\$_SERVER['QUERY_STRING'])</td><td>%s</td></tr>", urldecode(htmlentities(array_key_exists('QUERY_STRING', $_SERVER) ? $_SERVER['QUERY_STRING'] : "")));
print("</table>");

print("</body></html>");
?>
