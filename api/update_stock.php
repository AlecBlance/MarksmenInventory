<?php
    include 'conn.php';
    $code = $_POST['code'];
    $name = $_POST['name'];
    $expiry_date = $_POST['expiry_date'];
    $id_category = $_POST['category'];
    $count = $_POST['count'];
    $sql = "UPDATE stock SET name = '$name', expiry_date = '$expiry_date', id_category = '$id_category', count = '$count' WHERE code = '$code'";
    mysqli_query($conn, $sql);
    echo "Data Updated!";
?>