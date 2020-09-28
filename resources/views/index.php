<?php

$sql = "SELECT id, user, name, text, date FROM posts WHERE active = 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    echo "
    <div class='card'>
<div class='card-body'>
    <a href='#' onclick='";
    deletePost($row["id"]);
    echo"' class='close'>&times;</a>
    <h5 class='card-title'>" . $row["name"]. "</h5>
    <p class='card-text'>" . $row["text"]. "</p>
    <p class='card-text'><small class='text-muted'>" . $row["date"]. "</small></p>
</div></div><br>";
  }
} else {
  echo "0 results";
}

?>


