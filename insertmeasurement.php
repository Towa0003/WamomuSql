

<?php
$con=mysqli_connect("localhost","wamomu","wamomu","wamomu");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql="INSERT INTO measurements (measurement_id, mvalue, date, time, users_id) 
VALUES('', 63, '2014-01-01', '11:00' , 1),
('', 102, '2014-01-01', '11:30' , 1),
('', 80, '2014-01-03', '11:12', 1),
('', 80, '2014-01-03', '11:32', 1),
('', 120, '2014-01-05', '11:02', 1),
('', 95, '2014-01-05', '11:20', 1),
('', 110, '2014-01-07', '11:21', 1),
('', 78, '2014-01-07', '12:00', 1),
('', 102, '2014-01-09', '11:05', 1),
('', 86, '2014-01-09', '11:25', 1),
('', 116, '2014-01-11', '11:55', 1),
('', 92, '2014-01-11', '12:15', 1),
('', 102, '2014-01-13', '11:34', 1),
('', 81, '2014-01-13', '12:06', 1),
('', 104, '2014-01-15', '11:32', 1),
('', 102, '2014-01-15', '11:55', 1),
('', 80, '2014-01-17', '11:10', 1),
('', 120, '2014-01-17', '11:32', 1),
('', 95, '2014-01-19', '11:00', 1),
('', 110, '2014-01-19', '11:21', 1),
('', 78, '2014-01-21', '11:03', 1),
('', 102, '2014-01-21', '11:15', 1),
('', 86, '2014-01-23', '11:15', 1),
('', 116, '2014-01-23', '11:35', 1),
('', 92, '2014-01-25', '11:15', 1),
('', 102, '2014-01-25', '11:34', 1),
('', 81, '2014-01-27', '11:06', 1),
('', 102, '2014-01-27', '11:25', 1),
('', 86, '2014-01-29', '11:05', 1),
('', 116, '2014-01-29', '11:15', 1),
('', 92, '2014-01-31', '11:15', 1),
('', 102, '2014-01-31', '11:34', 1),
('', 81, '2014-02-02', '11:06', 1),
('', 102, '2014-02-02', '11:25', 1),
('', 86, '2014-02-04', '11:05', 1),
('', 116, '2014-02-04', '11:15', 1),
('', 92, '2014-02-06', '11:15', 1),
('', 102, '2014-02-06', '11:34', 1),
('', 81, '2014-02-08', '11:06', 1)";
if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }
echo "record added";

mysqli_close($con);
?>

