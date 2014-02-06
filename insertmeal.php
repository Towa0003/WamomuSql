<?php
$con=mysqli_connect("localhost","wamomu","wamomu","wamomu");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql="INSERT INTO meals (meal_id, mealkind, meal, date, time, users_id) 
VALUES ('', 'Morgens', 'Nutellabrot', '2014-01-01', '11:28', 1),
('', 'Morgens', 'Gulasch', '2014-01-03', '11:30', 1),
('', 'Morgens', 'Ei, Butterbrot', '2014-01-05', '11:18', 1),
('', 'Morgens', 'Schinkenbrot', '2014-01-07', '11:55', 1),
('', 'Morgens', 'Pizza', '2014-01-09', '11:20', 1),
('', 'Morgens', 'Kaesebrot', '2014-01-11', '12:10', 1),
('', 'Morgens', 'Muesli', '2014-01-13', '12:04', 1),
('', 'Morgens', 'Gulasch', '2014-01-15', '11:54', 1),
('', 'Morgens', 'Ei, Butterbrot', '2014-01-17', '11:30', 1),
('', 'Morgens', 'Schinkenbrot', '2014-01-19', '11:20', 1),
('', 'Morgens', 'Pizza', '2014-01-21', '11:10', 1),
('', 'Morgens', 'Kaesebrot', '2014-01-23', '11:30', 1),
('', 'Morgens', 'Muesli', '2014-01-25', '11:30', 1),
('', 'Morgens', 'Gulasch', '2014-01-27', '11:20', 1),
('', 'Morgens', 'Ei, Butterbrot', '2014-01-29', '11:13', 1),
('', 'Morgens', 'Schinkenbrot', '2014-01-31', '11:30', 1),
('', 'Morgens', 'Pizza', '2014-02-02', '11:23', 1),
('', 'Morgens', 'Kaesebrot', '2014-02-04', '11:10', 1),
('', 'Morgens', 'Muesli', '2014-02-06', '11:30', 1),
('', 'Morgens', 'Muesli', '2014-02-08', '11:20', 1)";
// UPDATE meals SET meals.mealkind='Morgens' where users_id=1
// INSERT INTO meals (mealkind, date, users_id) VALUES ('Frühstück', 20.11, 1)
// SET CHAR SET 'utf8'
if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }
echo "record added";

mysqli_close($con);
?>

