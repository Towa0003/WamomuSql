<?php
$con = mysqli_connect('localhost', 'wamomu', 'wamomu', 'wamomu');
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }


  
$sql="
      DROP DATABASE wamomu

";

// Execute query
if (mysqli_query($con,$sql))
  {
  echo "Database wamomu droped successfully";
  }
else
  {
  echo "Error creating database: " . mysqli_error($con);
  }
?>