<h1>Delete Post</h1>

<?php


$sql = "SELECT id, name, FROM posts ORDER BY id DESC";
    $result = $conn->query($sql);

  if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
    echo "<form action='/post/delete'>";
    echo $row["name"];
    echo "<input type='hidden' name='postId' value='". $row["id"]."'>";
    echo "<input type='submit' name='postDelete' value='Submit'></form> "      
  }
    } else {
  echo "No posts right now...";}



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