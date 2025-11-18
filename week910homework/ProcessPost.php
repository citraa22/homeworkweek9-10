<!DOCTYPE html>
<html>
<head>
  <title>POST Result</title>
</head>
<body>
  <h2>Result from POST</h2>

  <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $name = htmlspecialchars($_POST["name"]);
      $age = $_POST["age"];

      echo "<p>Name: $name</p>";
      echo "<p>Age: $age</p>";
    } else {
      echo "<p>No POST data received.</p>";
    }
  ?>
</body>
</html>
