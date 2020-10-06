<?php 
    if ($number > 0){
    $sql = "SELECT id, user, name, text, date FROM posts WHERE id = ".$number."";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
        echo "
        <div class='card'>
    <div class='card-body' >
    <button type='button' class='close' onclick='deletePost(".$row["id"].")' aria-label='Close'>
    <span aria-hidden='true'>&times;</span>
  </button>
        <h5 class='card-title'>" . $row["name"]. "</h5>
        <p class='card-text' id='postFull'>" . $row["text"]. "</p>
        <p class='card-text'><small class='text-muted'>Ievietots: " . $row["date"]. " Ievietoja: " . $row["user"]. "</small></p>
    </div></div><br>";
      }
    } else {
      echo "No posts right now...";
    }
  }
?>