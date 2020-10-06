<?php

    $sql = "SELECT id, user, name, text, date FROM posts WHERE active = 1 ORDER BY id DESC";
    $result = $conn->query($sql);

  if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
    echo "
    <div class='media position-relative'>
    <img src='../resources/images/1.jpg' class='mr-3' id='images' alt=''>
    <div class='media-body'>
      <h5 class='mt-0'>" . $row["name"]. "</h5>
      <p>" . $row["text"]. "</p>
      <a href='". $row["id"]."' class='stretched-link'>Read more</a>
    </div>
  </div>
  ";
  }
    } else {
  echo "No posts right now...";}


?>
