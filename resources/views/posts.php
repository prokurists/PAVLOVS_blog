<?php

$sql = "SELECT user, name, text, date FROM posts WHERE active = 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    echo "User: " . $row["user"]. " - Post name:" . $row["name"]. " " . $row["text"]. " " . $row["date"]. "<br>";
  }
} else {
  echo "0 results";
}

?>
