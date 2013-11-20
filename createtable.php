<?php
$con = mysqli_connect('localhost', 'wamomu', 'wamomu', 'wamomu');
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }


  
  // Create table
$sql="
      CREATE TABLE users (
   
      id INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
	  
	  user VARCHAR( 100 ) NOT NULL ,
   
      password VARCHAR( 100 ) NOT NULL 
   
      )
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