@set www_document_root=%UNI_SERVER_Z_ROOT%www
@set about_php_dir=%www_document_root%\about_php

@rmdir /s /q %about_php_dir%
@mkdir       %about_php_dir%

@xcopy /e *.html       %about_php_dir%
@xcopy /e *.php        %about_php_dir%
@xcopy /e .htaccess    %about_php_dir%
