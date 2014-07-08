about-php
=========

Small scripts about php.


Testing
=======

The scripts were tested on Windows with [Uniform Server](http://www.uniformserver.com/).

[copy_to_uniformserver.bat](https://raw.githubusercontent.com/ReneNyffenegger/about-php/master/copy_to_uniformserver.bat) copies
the php files to the destination root. The variable `uniform_server_dir` should be changed to point to the root of
the Uniform Server installation.

[.htaccess](https://raw.githubusercontent.com/ReneNyffenegger/about-php/master/.htaccess) is needed for apache to execute
`<?php .... ?>` as php code.

