<?php
$con = mysqli_connect('localhost', 'root', '', 'wamomu');
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }


  
  // Create table
$sql="
      CREATE TABLE people (
   
      id INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
   
      name VARCHAR( 100 ) NOT NULL ,
   
      sex BOOL NOT NULL DEFAULT '1',
   
      birthyear INT NOT NULL
   
      )
";

// Execute query
if (mysqli_query($con,$sql))
  {
  echo "Table people created successfully";
  }
else
  {
  echo "Error creating table: " . mysqli_error($con);
  }
?>