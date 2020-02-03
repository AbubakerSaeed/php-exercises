<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home &mdash; PHP File Handling Example</title>
    <link rel="stylesheet" href="/style.css" type="text/css">

  </head>

  <body>


    <?php
      require("form.php")
    ?>

    <?php

      if(isset($_POST["submit"])) {

        $file = fopen("into.txt", "w") or die("Nope, failed to open the file!");
        fwrite($file, htmlspecialchars($_POST["area"]));
        fclose($file);

        $msg;
        $dir = "uploads/";
        $target = $dir . basename($_FILES["file"]["name"]);
        $fileType = strtolower(pathinfo($target, PATHINFO_EXTENSION));

        $imageType = getimagesize($_FILES["file"]["tmp_name"]);
        $uploadState = ($imageType) ? true : false;

        if (file_exists($target)) {
          $msg = "Image's already exists!";
          $uploadState = false;
        }

         if ($fileType != "png" && $fileType != "jpg") {
           $msg = "We only support png and jpg.";
           $uploadState = false;
         }

         if ($uploadState) {

           if (move_uploaded_file($_FILES["file"]["tmp_name"], $target)) {
             $msg = "The file ${basename($_FILES["file"]["name"])} has been uploaded.";
           } else {
             $msg = "There are some error uploading your file.";
           }

         }

         echo "<img src=$target />";
         echo $msg;

      }

    ?>

  </body>

</html>