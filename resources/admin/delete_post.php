<h1>Delete Post</h1>

<?php


$showPosts = "SELECT * FROM posts";
    $result = $conn->query($showPosts);

  if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
    echo "<div class='row'>";
    echo "<form action='#' method='POST'>";
    echo "<div class='col-sm-8'>";
    echo $row["name"];
    echo "<input type='hidden' name='postId' value='". $row["id"]."'>";
    echo "</div><div class='col-sm-4'>";
    echo "<button type='submit' class='btn btn-danger' name='postDelete' value='Submit'>Delete</button></form></div></div> "  ;    
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
  


?>