<?php 
    include '../api/conn.php';
    $sql = "SELECT releasing.*, DATE_FORMAT(rls_date, '%b %d %Y') as date, stock.* FROM releasing, stock WHERE code = stock_code ORDER BY rls_number";
    $result = mysqli_query($conn, $sql);
?>
<table class="table">
    <tr class="headings">
        <th>RLS Number</th>
        <th>Supplier Name</th>
        <th>Supplier Address</th>
        <th>Stock Code</th>
        <th>Stock Name</th>
        <th>Current Stock</th>
        <th>Quantity (-)</th>
        <th>New Count</th>
        <th>RLS Date</th>
    </tr>
    <?php 
        while($row = mysqli_fetch_assoc($result)) {
    ?>
    <tr>
        <td><?php echo $row['rls_number']?></td>
        <td><?php echo $row['supplier_name']?></td>
        <td><?php echo $row['supplier_address']?></td>
        <td><?php echo $row['stock_code']?></td>
        <td><?php echo $row['name']?></td>
        <td><?php echo $row['current_stock']?></td>
        <td><?php echo $row['quantity']?></td>
        <td><?php echo $row['count']?></td>
        <td><?php echo $row['date']?></td>
    </tr>
    <?php 
        }
    ?>
</table>

