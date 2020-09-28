<?php

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

function deletePost($data){
    $delete_post = "DELETE FROM posts WHERE id='".$data."'";
    if ($conn->query($delete_post) === TRUE) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();

}     
?>
