<?php 
    include 'conn.php';
    $code = $_POST['code'];
    $name = $_POST['name'];
    $expiry_date = $_POST['expiry_date'];
    $id_category = $_POST['category'];
    $count = $_POST['count'];
    $sql = "SELECT COUNT(code) as duplicate FROM stock WHERE code = '$code'";
    $result = mysqli_fetch_assoc(mysqli_query($conn, $sql))['duplicate']; 
    if ($result != 0) {
        echo "Duplicate Stock Code"; 
        return;
    } 
    $sql = "INSERT INTO stock (code, name, expiry_date, id_category, count) VALUES ('$code', '$name', '$expiry_date', '$id_category', '$count')";
    mysqli_query($conn, $sql);
    echo "Data Inserted!";
?>