@set www_document_root=%UNI_SERVER_Z_ROOT%\www
@set about_php_dir=%www_document_root%\about_php

@mkdir %about_php_dir%

@copy /y *.html       %about_php_dir%
@copy /y *.php        %about_php_dir%
@copy /y .htaccess    %about_php_dir%
