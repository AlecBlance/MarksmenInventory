<?php
    include 'conn.php';
    if (isset($_POST['code'])) 
        $sql = "DELETE FROM stock WHERE code = '".$_POST['code']."'";
    if (isset($_POST['rcs_number']))
        $sql = "DELETE FROM receiving WHERE rcs_number = '".$_POST['rcs_number']."'";
    if (isset($_POST['rls_number']))
        $sql = "DELETE FROM releasing WHERE rls_number = '".$_POST['rls_number']."'";
    mysqli_query($conn, $sql);
    echo "Data Deleted!";
?>