<?php
$con = mysqli_connect('localhost', 'wamomu', 'wamomu', 'wamomu');
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }  
  // Create table
$sql="

-- -----------------------------------------------------
-- Table wamomu.measurements
-- -----------------------------------------------------
CREATE TABLE measurements (
  measurement_id INT NOT NULL AUTO_INCREMENT,
  mvalue DECIMAL(5,2) NOT NULL,
  date DATE NOT NULL,
  time TIME NOT NULL,
  users_id INT NOT NULL,
  PRIMARY KEY (measurement_id),
  CONSTRAINT fk_measurements_users
    FOREIGN KEY (users_id)
    REFERENCES wamomu.users ( id )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)

";

// Execute query
if (mysqli_query($con,$sql))
  {
  echo "Table measurements created successfully";
  }
else
  {
  echo "Error creating table: " . mysqli_error($con);
  }
?>