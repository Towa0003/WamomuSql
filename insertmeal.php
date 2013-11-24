<?php
$con=mysqli_connect("localhost","wamomu","wamomu","wamomu");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql="INSERT INTO meals (mealkind, date, time, users_id) 
VALUES ('Vormittag', '2013-11-14', '19:30', 1)";
// UPDATE meals SET meals.mealkind='Mittag' where users_id=1
// INSERT INTO meals (mealkind, date, users_id) VALUES ('Frühstück', 20.11, 1)
// SET CHAR SET 'utf8'
if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }
echo " record added";

mysqli_close($con);
?>

