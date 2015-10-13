autocmd BufWritePost  */about/php/**/*.html     call CopyToUniformServer(expand('%'))
autocmd BufWritePost  */about/php/**/*.php      call CopyToUniformServer(expand('%'))
autocmd BufWritePost  */about/php/**/.htaccess  call CopyToUniformServer(expand('%'))

fu! CopyToUniformServer(fileName)

  call TQ84_log_indent(expand('<sfile>') . ' fileName=' . a:fileName) 

  let l:path = 'c:\tools\UniServerZ\www\about_php\' . fnamemodify(a:fileName, ':h')

  call TQ84_log('path=' . l:path)

  if ! isdirectory(l:path)

    call TQ84_log('Path does not exist, creating it')
    call mkdir(l:path, 'p')

  endif


  let l:cmd = 'copy ' . a:fileName . ' ' . l:path
  call TQ84_log('cmd = ' . l:cmd)

  let l:dummy = system(l:cmd)

  call TQ84_log_dedent()

endfu
