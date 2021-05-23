<?php
    include 'conn.php';
    $rcs_number = $_POST['rcs_number'];
    $supplier_name = $_POST['supplier_name'];
    $rcs_date = $_POST['rcs_date'];
    $stock_code = $_POST['stock_code'];
    $current_stock = $_POST['current_stock'];
    $quantity = $_POST['quantity'];
    $supplier_address = $_POST['supplier_address'];
    $sql = "SELECT COUNT(rcs_number) as duplicate FROM receiving WHERE rcs_number = '$rcs_number'";
    $result = mysqli_fetch_assoc(mysqli_query($conn, $sql))['duplicate']; 
    if ($result != 0) {
        echo "Duplicate RCS Number"; 
        return;
    } 
    $sql = "UPDATE stock SET count = count + $quantity WHERE code = '$stock_code'";
    $sql2 = "INSERT INTO receiving (rcs_number, supplier_name, rcs_date, stock_code, quantity, supplier_address, current_stock) VALUES ('$rcs_number', '$supplier_name', '$rcs_date', '$stock_code', '$quantity', '$supplier_address', '$current_stock')";
    mysqli_query($conn, $sql);
    mysqli_query($conn, $sql2);
    echo "Data Inserted!";
?>