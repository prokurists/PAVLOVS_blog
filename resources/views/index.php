<div class='card'>
<?php

$sql = "SELECT user, name, text, date FROM posts WHERE active = 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    echo "
<div class='card-body'>
    <h5 class='card-title'>" . $row["name"]. "</h5>
    <p class='card-text'>" . $row["text"]. "</p>
    <p class='card-text'><small class='text-muted'>" . $row["date"]. "</small></p>
</div><br>";
  }
} else {
  echo "0 results";
}

?>

</div>
