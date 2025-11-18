<!DOCTYPE html>
<html>
<head>
  <title>GET Result</title>
</head>
<body>
  <h2>Result from GET</h2>

  <?php
    if (isset($_GET['name']) && isset($_GET['age'])) {
      $name = htmlspecialchars($_GET["name"]);
      $age = $_GET["age"];

      echo "<p>Name: $name</p>";
      echo "<p>Age: $age</p>";
    } else {
      echo "<p>No data received.</p>";
    }
  ?>
</body>
</html>
