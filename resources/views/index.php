<?php
 if (isset($_COOKIE["user"])){
  echo "<a href='/admin'>Jauns posts</a>";}

$sql = "SELECT id, user, name, text, date FROM posts WHERE active = 1 ORDER BY id DESC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    echo "
    <div class='card'>
<div class='card-body'>
    <h5 class='card-title'>" . $row["name"]. "</h5>
    <p class='card-text'>" . $row["text"]. "</p>
    <p class='card-text'><small class='text-muted'>Ievietots: " . $row["date"]. " Ievietoja: " . $row["user"]. "</small></p>
</div></div><br>";
  }
} else {
  echo "0 results";
}


?>
