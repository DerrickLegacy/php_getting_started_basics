<?php
    
    //access file fields automatically
    // print_r($_FILES);

    $fileName = $_FILES['university_id']['name'];
    $fileType = $_FILES['university_id']['type'];
    $fileTmpName = $_FILES['university_id']['tmp_name'];
    $fileError = $_FILES['university_id']['error'];
    $fileSize = $_FILES['university_id']['size'];


    //access file fields manually
    echo "File Name:" . $fileName. "<br>"; 
    echo "File Type:" . $fileType. "<br>";
    echo "File TmpName:" . $fileTmpName. "<br>";
    echo "File Error:" . $fileError. "<br>";
    echo "File Size:" . $fileSize. "<br>";

    //get image file and save it somewhere on my pc
    
    // Check if form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // File upload handling
        if ($_FILES['university_id']['error'] === UPLOAD_ERR_OK) {
            $fileName = $_FILES['university_id']['name'];
            $fileTmpName = $_FILES['university_id']['tmp_name']; //temporary location

            // Check if the file is an image
            $allowedTypes = ['image/jpeg', 'image/png', 'image/gif'];
            $fileType = $_FILES['university_id']['type'];
            if (!in_array($fileType, $allowedTypes)) {
                echo "Only JPG, PNG, and GIF files are allowed.";
                 
            } else{
                // Destination where files will be permanently stored
                $destination = 'uploads/' . $fileName;
                
                // Move the uploaded file to the permanent location
                if (move_uploaded_file($fileTmpName, $destination)) {
                    echo "File uploaded successfully!";
                    
                } else {
                    echo "Error moving file to destination.";
                }
            }
        } else {
            echo "Error uploading file.";
        }
    }
?>
