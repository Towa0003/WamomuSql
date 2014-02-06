<?php
$con = mysqli_connect('localhost', 'wamomu', 'wamomu', 'wamomu');
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }


  
  // Create table
$sql="
CREATE TABLE IF NOT EXISTS wamomu.users (
  id INT NOT NULL AUTO_INCREMENT,
  vname VARCHAR(45) NULL,
  nname VARCHAR(45) NULL,
  user VARCHAR(45) NULL,
  password VARCHAR(45) NULL,
  PRIMARY KEY (id))
";

// Execute query
if (mysqli_query($con,$sql))
  {
  echo "Table users created successfully";
  }
else
  {
  echo "Error creating table: " . mysqli_error($con);
  }
?>

