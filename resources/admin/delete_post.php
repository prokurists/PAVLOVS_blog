<h1>Delete Post</h1>
<table class="table">
<thead>
              <tr>
                <th>Post name</th>
                <th>Action</th>
              </tr>
            </thead>
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
                <td colspan='8'>".$row["name"]."</td>
                <td colspan='4'><button type='submit' class='btn btn-danger' name='postDelete' value='Submit'>Delete</button></form></td>
              </tr>
            </tbody>
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
  


?>  </table>