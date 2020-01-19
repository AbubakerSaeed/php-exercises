<style>

  form {
    background: hsl(0, 0%, 6%);

    border-radius: 8px;
    padding: 50px;
    box-sizing: border-box;
  }

  fieldset:first-of-type,
  fieldset:first-of-type p {
    margin-top: 0;
    padding-top: 0;
  }

  fieldset {
    border: 0;
    margin: 6px 0;
    padding: 10px 0;

    display: flex;
    flex-direction: column;
  }

  input[type="text"],
  input[type="number"] {
    font-size: 1em;
    font-family: inherit;

    color: hsl(0, 0%, 50%);
    background: hsl(0, 0%, 10%);

    width: 300px;
    border: 0;
    border-radius: 2px;
    padding: 16px 10px;
    box-sizing: border-box;

    transition: .3s linear;
  }

  label,
  input[type="radio"] {
    cursor: pointer;
  }

  input[type="radio"] {
    margin-bottom: 10px;
  }

  input:hover,
  input:focus,
  input:active {
    color: hsl(0, 0%, 80%);
    background: hsl(0, 0%, 14%);
  }

  span {
    margin-left: 4px;
  }

  button {
    font-family: inherit;
    font-weight: bold;
    font-size: 1em;

    color: inherit;
    background: transparent;

    border: 1px solid currentColor;
    border-radius: 100px;
    margin-top: 20px;
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

<form action="/form-handling.php" method="POST">

  <fieldset>
    <p>Name:</p>
    <input type="text" name="name">
  </fieldset>

  <fieldset>
    <p>Age:</p>
    <input type="number" name="age">
  </fieldset>

  <fieldset>
    <p>Gender:</p>

    <label>
      <input type="radio" name="gender" value="male" checked>
      <span>Male</span>
    </label>

    <label>
      <input type="radio" name="gender" value="female">
      <span>Female</span>
    </label>
  </fieldset>

  <button type="submit">Submit</button>

</form>