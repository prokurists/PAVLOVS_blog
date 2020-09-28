<?php

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

function deletePost($data){
    $sql = "DELETE FROM posts WHERE id='".$data."'";

}

     
?>
