<?php
$con=mysqli_connect("localhost","wamomu","wamomu","wamomu");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

mysqli_query($con,"INSERT INTO people (name, sex, birthyear)
VALUES ('Peter', 'male',35)");

mysqli_query($con,"INSERT INTO people (name, sex, birthyear)
VALUES ('Peterr', 'male',35)");

mysqli_query($con,"INSERT INTO people (name, sex, birthyear)
VALUES ('Peterrr', 'male',35)");



mysqli_close($con);
?>