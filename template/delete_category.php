<?php 
    include '../api/conn.php';
    $sql = "SELECT * FROM category";
    $result = mysqli_query($conn,$sql);
?>
<div class="forms">
    <div class="header">
        <p>Delete Category</p>
    </div>
    <br>
    <table class="table">
        <tr class="headings">
            <th>NAME</th>
            <th>DESCRIPTION</th>
            <th>DELETE</th>
        </tr>
        <?php 
            while($row = mysqli_fetch_assoc($result)) {
        ?>
        <tr>
            <td><?php echo $row['name']?></td>
            <td><?php echo $row['description']?></td>
            <td>
                <button class="deduct" type="button" onclick="delete_category(<?php echo $row['id']?>)">DELETE</button>
            </td>
        </tr>
        <?php }?>
    </table>
</div>