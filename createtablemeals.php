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
-- Table wamomu.meals
-- -----------------------------------------------------
CREATE TABLE meals (
  mealkind INT NOT NULL,
  date DECIMAL NOT NULL,
  users_id INT NOT NULL,
  PRIMARY KEY (users_id),
  CONSTRAINT fk_meals_users1
    FOREIGN KEY (users_id)
    REFERENCES wamomu.users (id)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)

";

// Execute query
if (mysqli_query($con,$sql))
  {
  echo "Table meals created successfully";
  }
else
  {
  echo "Error creating table: " . mysqli_error($con);
  }
?>