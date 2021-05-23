<form class="forms" id="stock">
    <div class="header">
        <p>NEW STOCK</p>
    </div>
    <div class="content-child">
        <div class="left-content">
            <label><span class="req"></span>Code<span class="req-text"></span></label>
            <input autocomplete="off" type="text" name="code" require/>
            <label><span class="req"></span>Name<span class="req-text"></span></label>
            <input autocomplete="off" type="text" name="name" require/>
            <label>Expiry Date</label>
            <input autocomplete="off" type="date" name="expiry_date"/>
        </div>
        <div class="right-content">
            <div class="above">
                <label><span class="req"></span>Category<span class="req-text"></span></label>
                <div class="input-line">
                    <select name="category" require>
                        <option></option>
                        <?php 
                            include '../api/conn.php';
                            $sql = "SELECT * FROM category";
                            $result = mysqli_query($conn, $sql);
                            while($row = mysqli_fetch_assoc($result)) {
                        ?>
                            <option value="<?php echo $row['id']?>"><?php echo $row['name']?></option>
                        <?php }?>
                    </select>
                    <button type="button" class="delete-category">DELETE</button>
                </div>
            </div>
            <label><span class="req"></span>Count<span class="req-text"></label>
            <input autocomplete="off" type="text" name="count" require/>
        </div>
    </div>
    <div class="content-button">
        <button class="submit">SUBMIT</button>
        <button class="clear" type="button">CLEAR</button>
    </div>
</form>
