<?php

if(isset($_COOKIE['user'])) {

	echo "<h1>cPanel content</h1>";	

	$getMessages = "SELECT * FROM contacts";
    $result = $conn->query($getMessages);
    
    if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
        echo "
        <div class='card'>
        <div class='card-body' >
        <h5 class='card-title'>" . $row["email"]. "</h5>
        <p class='card-text' id='postFull'>" . $row["text"]. "</p>
        <p class='card-text'><small class='text-muted'>Ievietots: " . $row["date"]. "</small></p>
    </div></div><br>";
      }
    } else {
      echo "No posts right now...";
    }

	} else {
		  header("Refresh: 0; URL=/admin/login");
	}


?>


