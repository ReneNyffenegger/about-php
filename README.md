about-php
=========

Small scripts about php.


Testing
=======

The scripts were tested on Windows with [Uniform Server](http://www.uniformserver.com/).

[copy_to_uniformserver.bat](https://raw.githubusercontent.com/ReneNyffenegger/about-php/master/copy_to_uniformserver.bat) copies
the php files to the destination root. The variable `uniform_server_dir` should be changed to point to the root of
the Uniform Server installation.

[copy_to_uniformserver.vim](https://raw.githubusercontent.com/ReneNyffenegger/about-php/master/copy_to_uniformserver.vim) is a
[vim](http://www.vim.org/)-script that copies html files to the www-destination-folder when they're saved.

[These lines from .htaccess](https://raw.githubusercontent.com/ReneNyffenegger/about-php/master/.htaccess) are needed for apache to execute
`<?php .... ?>` as php code.

