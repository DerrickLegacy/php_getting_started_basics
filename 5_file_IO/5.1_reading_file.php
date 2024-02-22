<!DOCTYPE html>
<html lang="en">
<head>
    <title>Reading from a file</title>
</head>
<body>
    <p>PHP File I/O</p> 
    <br>
    <?php
        // Steps to read a file – 
            // 1.Open file by using fopen() function.
            // 2.Measure the length of the file by the fsize() function.
            // 3.Read the content of the file by fread() function.
            // 4.Close the file by fclose() function.
        echo "FIle I/O";
        $filename = "READMEE.md";
        $file = fopen($filename,"r");
        if($file == false){
            echo "Error in poening a file";
            exit();
        }else{
            $filesize = filesize($filename);
            $filetext = fread($file, $filesize);
            fclose($file);
        }
        echo "File size: $filesize bytes";
        echo "<pre>$filetext </pre>";
    ?>
</body>
</html>