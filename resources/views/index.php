<?php

    $sql = "SELECT id, user, name, text, date FROM posts WHERE active = 1 ORDER BY id DESC";
    $result = $conn->query($sql);

  if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
    echo "
    <div class='row no-gutters bg-light position-relative'>
    <div class='col-md-6 mb-md-0 p-md-4'>
      <img src='../resources/images/1.jpg' class='w-100' alt=''>
    </div>
    <div class='col-md-6 position-static p-4 pl-md-0'>
      <h5 class='mt-0'>" . $row["name"]. "</h5>
      <p>" . $row["text"]. "</p>
      <a href='". $row["id"]."' class='stretched-link'>Read more</a>
    </div>
  </div>";
  }
    } else {
  echo "No posts right now...";}


?>
