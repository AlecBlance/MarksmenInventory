<div class="forms">
    <div class="header">
        <p>DELETE RECORDS</p>
    </div>
    <div class="content-child">
        <div class="left-content">
            <form id="delete_stock">
                <div class="unchangeable">
                    <p><span>Delete Stock</span></p>
                </div>
                <label><span class="req"></span>Code<span class="req-text"></span></label>
                <div class="input-line">
                    <input autocomplete="off" type="text" name="code" require/>
                    <button>DELETE</button>
                </div>
            </form>
            <form id="delete_receiving">
                <div class="unchangeable">
                    <p><span>Delete Receiving Data</span></p>
                </div>
                <label><span class="req"></span>RCS Number<span class="req-text"></span></label>
                <div class="input-line">
                    <input autocomplete="off" type="text" name="rcs_number" require/>
                    <button>DELETE</button>
                </div>
            </form>
        </div>
        <div class="right-content">
            <form id="delete_releasing">
                <div class="unchangeable">
                    <p><span>Delete Releasing Data</span></p>
                </div>
                <label><span class="req"></span>RLS Number<span class="req-text"></span></label>
                <div class="input-line">
                    <input autocomplete="off" type="text" name="rls_number" require/>
                    <button>DELETE</button>
                </div>
            </form>
        </div>
    </div>
</div>
