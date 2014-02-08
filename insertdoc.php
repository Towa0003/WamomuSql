<?php
$con=mysqli_connect("localhost","wamomu","wamomu","wamomu");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql="INSERT INTO users (id, vname, nname, user, password, user_id)
VALUES ('', 'VName', 'NName', 'Testdoc','Testpw',1),
('','Christian', 'Murlowski', 'Chrisdoc','chmu',2),
('', 'Tobias', 'Walter', 'Tobidoc','towa',3),
('', 'Maximilian', 'Mock', 'Maxdoc','mamo',4)";

if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }
echo " record added";

mysqli_close($con);
?>