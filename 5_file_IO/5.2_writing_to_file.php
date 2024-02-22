<?php
   $filename = "class.txt";
   $file = fopen($filename,"w");
   if($file == false){
        echo "Error in opening file...";
        exit();
   }
   $text = "This will be writtenn to the file";
   $filesize = filesize($filename);
   $filetext = fwrite($file, $text);
   fclose($file)
?>