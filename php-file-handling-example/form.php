<style>

  form {
    background: hsl(0, 0%, 6%);

    border-radius: 8px;
    padding: 50px;
    box-sizing: border-box;

    text-align: center;
  }

  textarea {
    display: block;

    font-size: 1em;
    font-family: inherit;

    color: hsl(0, 0%, 50%);
    background: hsl(0, 0%, 10%);

    width: 340px;
    height: 220px;
    border: 0;
    border-radius: inherit;
    padding: 16px 10px;
    box-sizing: border-box;

    transition: .3s linear;
  }

  textarea:hover,
  textarea:focus,
  textarea:active {
    color: hsl(0, 0%, 80%);
    background: hsl(0, 0%, 14%);
  }

  button {
    font-family: inherit;
    font-weight: bold;
    font-size: 1em;

    color: inherit;
    background: transparent;

    border: 1px solid currentColor;
    border-radius: 100px;
    margin-top: 40px;
    padding: 8px 22px;
    box-sizing: border-box;

    transition: .1s linear;

    cursor: pointer;
  }

  button:hover,
  button:focus,
  button:active {
    background: hsl(180, 50%, 6%);
  }

</style>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="POST" enctype="multipart/form-data">
  <?php
    echo "<textarea name='area'>";
      if($_POST["area"]) {
        echo htmlspecialchars($_POST["area"]);
      }
    echo "</textarea>";
  ?>
  <input type="file" name="file">
  <button type="submit" name="submit">Save</button>
</form>