@set uniform_server_dir=c:\tools\UniServerZ
@set www_document_root=%uniform_server_dir%\www
@set about_php_dir=%www_document_root%\about_php

@mkdir %about_php_dir%

@copy /y *.html       %about_php_dir%
@copy /y *.php        %about_php_dir%
@copy /y .htaccess    %about_php_dir%
