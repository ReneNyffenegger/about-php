autocmd BufWritePost  */about/php/*.html call CopyToUniformServer(expand('%'))

fu! CopyToUniformServer(fileName)

  let l:cmd = 'copy ' . a:fileName . ' c:\tools\UniServerZ\www\about_php'

  let l:dummy = system(l:cmd)

endfu
