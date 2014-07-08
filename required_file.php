<pre>
  If the included or required file contains php code, the code must be between
  &lt;?php ... &gt; even though the include/require command is already contained
  within &lt;?php ... &gt;.
  
  Text that is not within those tags will be sent to the browser!
</pre>
<?php

  function avg($a, $b) {

    return ($a+$b)/2;

  }

?>
