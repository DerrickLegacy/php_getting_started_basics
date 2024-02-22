Steps to read a file – 

    Open file by using fopen() function.
    Measure the length of the file by the fsize() function.
    Read the content of the file by fread() function.
    Close the file by fclose() function.

Example – the content in the text file is assigned to a variable and then displayed on the web page.

Input- 
      ....
         $filename = "tmp.txt";
         $file = fopen( $filename, "r" );
         
         if( $file == false ) {
            echo ( "Error in opening file" );
            exit();
         }
         
         $filesize = filesize( $filename );
         $filetext = fread( $file, $filesize );
         fclose( $file );
         
         echo ( "File size : $filesize bytes" );
         echo ( "<pre>$filetext</pre>" );
      .......
`

![alt text](image.png)