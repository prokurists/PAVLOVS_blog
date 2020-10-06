<div class='row no-gutters position-relative'>
<?php

    $sql = "SELECT id, user, name, text, date FROM posts WHERE active = 1 ORDER BY id DESC";
    $result = $conn->query($sql);

  if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
    echo "
    <div class='col-md-4 mb-md-0 p-md-4'>
      <img src='../resources/images/1.jpg' id='images' class='w-100' alt=''>
    </div> 
    <div class='col-md-8 position-static p-4 pl-md-0'>
      <h5 class='mt-0'>" . $row["name"]. "</h5>
      <p>" . $row["text"]. "</p>
      <a href='". $row["id"]."' class='btn btn-primary stretched-link'>Read more</a>
      </div>
  ";
  }
    } else {
  echo "No posts right now...";}


?></div>
