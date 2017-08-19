<?php

    include("connection.php");
    $sql = "CREATE TABLE user (
            id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
            firstname VARCHAR(30) NOT NULL,
            lastname VARCHAR(30) NOT NULL,
            email VARCHAR(50),
            password VARCHAR(30) NOT NULL)";

    if (mysqli_query($db, $sql)) {
    		echo "Table MyGuests created successfully";
    	} 
    	
    else {
    	 	echo "Error creating table: " . mysqli_error($conn);
      }

	mysqli_close($db);

?>
