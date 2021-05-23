<?php
    include '../api/conn.php';
    $code = $_POST['code'];
    $sql = "SELECT * FROM stock WHERE code = '$code'";
    $result = mysqli_fetch_assoc(mysqli_query($conn, $sql));
?>

<form class="forms" id="receiving_form">
    <div class="header">
        <p>RECEIVING STOCK</p>
    </div>
    <div class="unchangeable">
        <p><span>Stock Code:</span> <?php echo $code?></p>
        <p><span>Stock Name:</span> <?php echo $result['name']?></p>
        <p><span>Current Stock:</span> <?php echo $result['count']?></p>
    </div>
    <div class="content-child">
        <div class="left-content">
            <input type="hidden" name="stock_code" value="<?php echo $code?>">
            <label>RCS Number</label>
            <input autocomplete="off" type="text" name="rcs_number"/>
            <label><span class="req"></span>Supplier Name<span class="req-text"></span></label>
            <input autocomplete="off" type="text" name="supplier_name" require/>
            <label>RCS Date</label>
            <input autocomplete="off" type="date" name="rcs_date"/>
        </div>
        <div class="right-content">
            <label><span class="req"></span>Supplier Address<span class="req-text"></span></label>
            <input autocomplete="off" type="text" name="supplier_address" require/>
            <label><span class="req"></span>Quantity<span class="req-text"></span></label>
            <input autocomplete="off" type="text" name="quantity" require/>
            <input type="hidden" name="current_stock" value="<?php echo $result['count']?>"/>
        </div>
    </div>
    <div class="content-button">
        <button class="submit">SUBMIT</button>
        <button class="clear" type="button">CLEAR</button>
    </div>
</form>
