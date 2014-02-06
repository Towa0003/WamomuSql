

<?php
$con=mysqli_connect("localhost","wamomu","wamomu","wamomu");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql="INSERT INTO measurements (measurement_id, mvalue, date, time, users_id) 
VALUES('', 63, '2013-10-01', '11:00' , 1),
('', 102, '2013-10-01', '11:12', 1),
('', 80, '2013-10-01', '15:10', 1),
('', 120, '2013-10-01', '15:32', 1),
('', 95, '2013-10-01', '18:00', 1),
('', 110, '2013-10-01', '18:21', 1),
('', 78, '2013-10-02', '09:40', 1),
('', 102, '2013-10-02', '10:05', 1),
('', 86, '2013-10-02', '13:25', 1),
('', 116, '2013-10-02', '13:55', 1),
('', 92, '2013-10-02', '18:15', 1),
('', 102, '2013-10-02', '18:34', 1),
('', 81, '2013-10-03', '11:06', 1),
('', 104, '2013-10-03', '11:32', 1)";
if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }
echo "record added";

mysqli_close($con);
?>

