<?php
$con=mysqli_connect("localhost","wamomu","wamomu","wamomu");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql="INSERT INTO meals (meal_id, mealkind, meal, date, time, users_id) 
VALUES ('', 'Morgens', 'Nutellabrot', '2013-10-01', '11:10', 1),
('', 'Mittag', 'Gulasch', '2013-10-01', '15:30', 1),
('', 'Abend', 'Ei, Butterbrot', '2013-10-01', '18:20', 1),
('', 'Morgens', 'Schinkenbrot', '2013-10-02', '10:00', 1),
('', 'Mittag', 'Pizza', '2013-10-02', '13:50', 1),
('', 'Abend', 'Kaesebrot', '2013-10-02', '18:30', 1),
('', 'Morgens', 'Muesli', '2013-10-03', '11:30', 1)";
// UPDATE meals SET meals.mealkind='Mittag' where users_id=1
// INSERT INTO meals (mealkind, date, users_id) VALUES ('Frühstück', 20.11, 1)
// SET CHAR SET 'utf8'
if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }
echo "record added";

mysqli_close($con);
?>

