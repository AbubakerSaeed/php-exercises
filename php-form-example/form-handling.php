<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Handling &mdash; Php Form Example</title>
    <link rel="stylesheet" href="/style.css" type="text/css">

  </head>

  <body>

    <?php

      if($_SERVER["REQUEST_METHOD"] === "POST") {

        function clean($data) {
          $data = trim($data);
          $data = stripslashes($data);
          $data = htmlspecialchars($data);
          return $data;
        }

        $name = clean($_POST["name"]);
        $age = clean($_POST["age"]);
        $gender = clean($_POST["gender"]);

        echo "
          <h1>Name's $name.</h1>
          <p>Age's $age.</p>
          <p>And as you can see I'm $gender.</p>
        ";

      } else {
        echo "<h1>Nothing's here</h1>";
      };

    ?>

  </body>

</html>
