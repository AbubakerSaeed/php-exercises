<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Handling &mdash; PHP OOP Example</title>
    <link rel="stylesheet" href="/style.css" type="text/css">

  </head>

  <body>

    <?php

      trait fruit_available {
        public function available($status) {
          echo "<h2>$status</h2>";
        }
      }

      abstract class Day {
        abstract protected function displayDay();
      }

      class Health {
        public static function healthy($status) {
          echo "<p>Healthy: $status</p>";
        }
      }

      class Apple extends Day {

        public $name;
        public $quantity;
        public $day;

        const COLOR = "Red";

        final private function clean($data) {
          $data = trim($data);
          $data = stripslashes($data);
          $data = htmlspecialchars($data);
          return $data;
        }

        public function __construct($name, $quantity, $day) {
          $this->name = $this->clean($name);
          $this->quantity = $this->clean($quantity);
          $this->day = $this->clean($day);
        }

        private function getName() {
          return $this->name;
        }

        private function getQuantity() {
          return $this->quantity;
        }

        public function __destruct()
        {
          echo "<h1>Item: {$this->getName()}</h1>";
          echo Health::healthy("Yes");
          echo "<p>Color: " . self::COLOR . "</p>";
          echo "<p>Quantity: {$this->getQuantity()}</p>";
          echo $this->displayDay();
        }

        protected function displayDay() {
          return "<p>Day: $this->day</p>";
        }

        use fruit_available;

      }

      if(!($_SERVER["REQUEST_METHOD"] === "POST") === "false") {
        echo "<h1>Nothing's here</h1>";
      } else {
        $Apple = new Apple($_POST["name"], $_POST["quantity"], "Monday");
        $Apple->available("Nope... We cannot complete your order:");
      }

    ?>

  </body>

</html>
