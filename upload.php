<?php
//enctype="multipart/form-data"


 if (isset($_POST['submit'])) {
     $file = $_FILES['file'];

     $fileName = $_FILES['file']['name'];
     $fileTmpName = $_FILES['file']['tmp_name'];
     $fileSize = $_FILES['file']['size'];
     $fileError = $_FILES['file']['error'];
     $fileType = $_FILES['file']['type'];

     $fileExt = explode('.', $fileName);
     $fileAcyualExt = strtolower(end($fileExt));
     $allowed = array('jpg', 'jpeg', 'png');

     if (in_array($fileAcyualExt, $allowed)) {
         if($fileError === 0){
             if($fileSize < 2000000){
                 $fileNameNew = uniqid('', true).".".$fileAcyualExt;
                 $fileDestination = 'uploads/'.$fileNameNew;
                 move_uploaded_file($fileTmpName, $fileDestination);
             }else{
                echo "Your file is too big!";
             }
         }else{
            echo "There was an error uploading your file!";
         }
     }else{
         echo "You can not upload the file of this type!";
     }
 }