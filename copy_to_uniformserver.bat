@set uniform_server_dir=c:\tools\UniServerZ
@set www_document_root=%uniform_server_dir%\www
@set about_php_dir=%www_document_root%\about_php

@rmdir /s /q %about_php_dir%
@mkdir       %about_php_dir%

@xcopy /e *.html       %about_php_dir%
@xcopy /e *.php        %about_php_dir%
@xcopy /e .htaccess    %about_php_dir%
