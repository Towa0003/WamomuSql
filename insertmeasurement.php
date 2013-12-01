

<?php
$con=mysqli_connect("localhost","wamomu","wamomu","wamomu");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql="INSERT INTO measurements (mvalue, date, time, users_id) 
VALUES(3.6, '2013-10-01', '11:00' , 1),
(5.0, '2013-10-01', '11:12', 1),
(4.6, '2013-10-01', '15:10', 1),
(6.3, '2013-10-01', '15:32', 1),
(4.9, '2013-10-01', '18:00', 1),
(6.8, '2013-10-01', '18:21', 1),
(3.0, '2013-10-02', '09:40', 1),
(4.8, '2013-10-02', '10:05', 1),
(3.2, '2013-10-02', '13:25', 1),
(5.0, '2013-10-02', '13:55', 1),
(3.9, '2013-10-02', '18:15', 1),
(5.6, '2013-10-02', '18:34', 1),
(3.2, '2013-10-03', '11:06', 1),
(5.3, '2013-10-03', '11:32', 1)";
if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }
echo " record added";

mysqli_close($con);
?>

