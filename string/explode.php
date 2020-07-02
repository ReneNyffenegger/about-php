<?php

header('Content-Type: text/plain');

printQueryOfURI('https://foo.bar/baz');
printQueryOfURI('https://foo.bar/baz?val=one');
printQueryOfURI('https://foo.bar/baz?v1=one&v2=two');
printQueryOfURI('https://foo.bar/baz?this=wrong?query');

function printQueryOfURI($uri) {

  $res = explode('?', $uri, 2);

  $url   = $res[0];
  if (count($res) == 2) {
     $query = $res[1];
  }
  else {
     $query = '';

  }

  printf("%-22s %s\n", $url, $query);

}

?>
