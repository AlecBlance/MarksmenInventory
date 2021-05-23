<?php
    include 'conn.php';
    $name = $_POST['name'];
    $description = $_POST['description'];
    $sql = "INSERT INTO category (name, description) VALUES ('$name', '$description')";
    mysqli_query($conn, $sql);
    echo "Data Inserted!";
?>
