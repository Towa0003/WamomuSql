<?php
$essenszeit = strval($_GET['essenszeit']);
$essen = strval($_GET['essen']);
$datum = strval($_GET['datum']);
$zeit = strval($_GET['zeit']);
$userid = strval($_GET['userid']);

$con = mysqli_connect("localhost","wamomu","wamomu","wamomu");
if (!$con)
  {
	die('Could not connect: ' . mysqli_error($con));
  }

$sql="INSERT INTO meals (meal_id, mealkind, meal, date, time, users_id)
VALUES ('', '$essenszeit', '$essen', $datum, $zeit, $userid)";

if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }
echo "1 record added with ajax";

mysqli_close($con);
?>