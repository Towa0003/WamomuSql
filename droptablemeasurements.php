<?php
$con = mysqli_connect('localhost', 'wamomu', 'wamomu', 'wamomu');
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }


  
$sql="
	  DROP TABLE measurements
		
";

// Execute query
if (mysqli_query($con,$sql))
  {
  echo "Table measurements droped successfully";
  }
else
  {
  echo "Error dropping table: " . mysqli_error($con);
  }
?>