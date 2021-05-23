<?php
    include 'conn.php';
    $rls_number = $_POST['rls_number'];
    $supplier_name = $_POST['supplier_name'];
    $rls_date = $_POST['rls_date'];
    $stock_code = $_POST['stock_code'];
    $current_stock = $_POST['current_stock'];
    $quantity = $_POST['quantity'];
    $supplier_address = $_POST['supplier_address'];
    $sql = "SELECT COUNT(rls_number) as duplicate FROM releasing WHERE rls_number = '$rls_number'";
    $result = mysqli_fetch_assoc(mysqli_query($conn, $sql))['duplicate']; 
    if ($result != 0) {
        echo "Duplicate RLS Number"; 
        return;
    } 
    $sql = "UPDATE stock SET count = count - $quantity WHERE code = '$stock_code'";
    $sql2 = "INSERT INTO releasing (rls_number, supplier_name, rls_date, stock_code, quantity, supplier_address, current_stock) VALUES ('$rls_number', '$supplier_name', '$rls_date', '$stock_code', '$quantity', '$supplier_address', '$current_stock')";
    mysqli_query($conn, $sql);
    mysqli_query($conn, $sql2);
    echo "Data Inserted!";
?>