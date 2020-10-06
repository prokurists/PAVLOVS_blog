<table class="table">
  <caption>List of posts</caption>
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Post name</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
<?php


$showPosts = "SELECT * FROM posts";
    $result = $conn->query($showPosts);

  if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {

        echo "
        <form action='#' method='POST'>
        <input type='hidden' name='postId' value='". $row["id"]."'>
        
        <tbody>
        <tr>
          <th scope='row'>". $row["id"]."</th>
          <td>".$row["name"]."</td>
          <td><button type='submit' class='btn btn-danger' name='postDelete' value='Submit'>Delete</button></form></td>
        </tr>
        ";
  }
    } else {
  echo "No posts right now to delete.";}



  if (isset($_POST["postDelete"])){

    $postId = $_POST["postId"];
    $deletePost = "DELETE FROM posts WHERE id = '".$postId."'";
    $result = mysqli_query($conn, $sql_exp_del);

        if ($conn->query($deletePost) === TRUE) {
            header('Location: ' . $_SERVER['HTTP_REFERER']);
        } else {
          echo "Error deleting record: " . $conn->error;
        }
        
        $conn->close();
    }
  


?>    </tbody>
</table>