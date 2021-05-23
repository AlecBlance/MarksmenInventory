<?php 
    include '../api/conn.php';
    $sql = "SELECT stock.*, DATE_FORMAT(expiry_date, '%b %d %Y') as date, stock.name as stock_name , category.name as cat_name FROM stock, category WHERE id = id_category ORDER BY code, stock_name, cat_name";
    $result = mysqli_query($conn, $sql);
?>

<table class="table">
    <tr class="headings">
        <th>CODE</th>
        <th>NAME</th>
        <th>CATEGORY</th>
        <th>EXPIRY DATE</th>
        <th>COUNT</th>
        <th>RECEIVING</th>
        <th>RELEASING</th>
    </tr>
    <?php
        while($row = mysqli_fetch_assoc($result)) {
    ?>
    <tr>
        <td><button type="button" class="edit-button" onclick="edit_stock('<?php echo $row['code']?>')"><?php echo $row['code']?></button></td>
        <td><?php echo $row['stock_name']?></td>
        <td><?php echo $row['cat_name']?></td>
        <td><?php echo $row['date']?></td>
        <td><?php echo $row['count']?></td>
        <td>
            <button class="add" type="button" onclick="receive('<?php echo $row['code']?>')">ADD</button>
        </td>
        <td>
            <button class="deduct" type="button" onclick="release('<?php echo $row['code']?>')">DEDUCT</button>
        </td>
    </tr>
    <?php }?>
</table>
