<?php
    include 'conn.php';
    $id = $_POST['id'];
    $sql = "DELETE FROM category WHERE id = '$id'"; 
    mysqli_query($conn, $sql);
?>