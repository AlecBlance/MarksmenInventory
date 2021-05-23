<?php 
    include '../api/conn.php';
    $sql = "SELECT receiving.*,  DATE_FORMAT(rcs_date, '%b %d %Y') as date,stock.* FROM receiving, stock WHERE code = stock_code ORDER BY rcs_number";
    $result = mysqli_query($conn, $sql);
?>
<table class="table">
    <tr class="headings">
        <th>RCS Number</th>
        <th>Supplier Name</th>
        <th>Supplier Address</th>
        <th>Stock Code</th>
        <th>Stock Name</th>
        <th>Current Stock</th>
        <th>Quantity (+)</th>
        <th>New Count</th>
        <th>RCS Date</th>
    </tr>
    <?php 
        while($row = mysqli_fetch_assoc($result)) {
    ?>
    <tr>
        <td><?php echo $row['rcs_number']?></td>
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
