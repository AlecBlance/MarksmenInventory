<?php
    include '../api/conn.php';
    $code = $_POST['code'];
    $sql = "SELECT * FROM stock WHERE code = '$code'";
    $result_edit = mysqli_fetch_assoc(mysqli_query($conn, $sql));
?>

<form class="forms" id="update_stock">
    <div class="header">
        <p>UPDATE STOCK</p>
    </div>
    <div class="content-child">
        <div class="left-content">
            <input autocomplete="off" type="hidden" name="code" value="<?php echo $code?>"/>
            <div class="unchangeable">
                <p><span>Code:</span> <?php echo $code?></p>
            </div>
            <label class="remove-margin"><span class="req"></span>Name<span class="req-text"></label>
            <div class="input-line new-input">
                <input autocomplete="off" type="text" name="name" value="<?php echo $result_edit['name']?>" require/>
            </div>
            <label>Expiry Date</label>
            <input autocomplete="off" type="date" name="expiry_date" value="<?php echo $result_edit['expiry_date']?>"/>
        </div>
        <div class="right-content">
            <div class="above">
                <label><span class="req"></span>Category<span class="req-text"></span></label>
                <div class="input-line new-input">
                    <select name="category" require>
                        <option></option>
                        <?php 
                            include '../api/conn.php';
                            $sql = "SELECT * FROM category";
                            $result = mysqli_query($conn, $sql);
                            while($row = mysqli_fetch_assoc($result)) {
                        ?>
                            <option value="<?php echo $row['id']?>" <?php if ($row['id'] == $result_edit['id_category']) echo "selected = 'selected'"?>><?php echo $row['name']?></option>
                        <?php }?>
                    </select>
                </div>
            </div>
            <label><span class="req"></span>Count<span class="req-text"></label>
            <input autocomplete="off" type="text" name="count" value="<?php echo $result_edit['count']?>" require/>
        </div>
    </div>
    <div class="content-button">
        <button class="submit">SUBMIT</button>
        <button class="clear" type="button">CLEAR</button>
    </div>
</form>
