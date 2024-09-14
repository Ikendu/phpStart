<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="index.css">
</head>
<body>

  <?php
    $targetdir = 'uploads/';
    $targetfile = $targetdir . basename($_FILES['fileToUpload']['name']);
    $uploadOk = 1;
    $imagesize = getimagesize($_FILES['fileToUpload']['tmp_name']);

    // check if file is an Image
    if($imagesize){ 
      echo "The image size is $imagesize[3] <br>";
      // var_dump($imagesize);
    } else {
      echo "Sorry this is not an image";
      $uploadOk = 0;
    } 

    // check if file already exist
    if(file_exists($targetfile)){
       echo 'Sorry file already exist';
       $uploadOk = 0;
    }
    
    // check if the file size is larger that 500kb
    if($_FILES['fileToUpload']['size'] > 500000){
      echo "File cannot be larger than 500kb";
      $uploadOk = 0;
    }
    // Allow only some image file type
    $imagefiletype = strtolower(pathinfo($targetfile, PATHINFO_EXTENSION));
    if($imagefiletype != 'jpg' || $imagefiletype != 'png' || $imagefiletype != 'gif' || $imagefiletype != 'jpeg'){
      echo 'Sorry only JPG, JPEG, PNG or GIF images type is allowed.';
      $uploadOk = 0;
    }

    //Check if any all image test is passed
    if($uploadOk == 0){
      echo 'Try again';
    }else{
       $result = move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $targetfile);

      if($result){
        echo "<div class='form'>
          <h3>The file ".htmlspecialchars(basename($_FILES['fileToUpload']['name']))." has been uploaded</h3>
          <h2>Success!</h2>
        </div>";
      }

    }

   
    

?>
  
</body>
</html>

