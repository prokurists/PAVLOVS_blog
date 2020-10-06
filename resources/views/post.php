<?php
    $sql = "SELECT id, user, name, text, date FROM posts WHERE id = ".$number."";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
        echo "
        <div class='card'>
        <button type='button' ' onclick='deletePost(".$row["id"].")' aria-label='Close'>
        <span aria-hidden='true'>&times;</span>
      </button>
    <div class='card-body'>
        <h5 class='card-title'>" . $row["name"]. "</h5>
        <p class='card-text'>" . $row["text"]. "</p>
        <p class='card-text'><small class='text-muted'>Ievietots: " . $row["date"]. " Ievietoja: " . $row["user"]. "</small></p>
    </div></div><br>";
      }
    } else {
      echo "0 results";
    }

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