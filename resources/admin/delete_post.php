<h1>Delete Post</h1>

<?php
    function deletePost($id){

        $deletePostSql = "DELETE FROM posts WHERE id=".$id."";

        if ($conn->query($deletePostSql) === TRUE) {
          echo "Record deleted successfully";
        } else {
          echo "Error deleting record: " . $conn->error;
        }
        
        $conn->close();
    }
?>