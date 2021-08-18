/**
 * Get the content of the page
 * @param {String} page page to navigate
 * @return {}
 */
function getContent(page) {
    let url = `template/${page}.php`;
    $.ajax({
        url: url,
        type: "GET",
        async: false,
        success: function (res) {
            $(".content")[0].innerHTML = res;
        },
    });
}

/**
 * Clear inputs
 * @return null
 */
function clear() {
    $("input[type='text']").val("");
    $("input[type='date']").val("");
    $("select").val("");
}

/**
 * Deletes category
 * @param {String} id
 * @returns null
 */
function delete_category(id) {
    if (!confirm("Delete this Data?")) return;
    $.post("api/delete_category.php", { id: id }, function () {
        getContent("delete_category");
        alert("Data Deleted!");
    });
}

/**
 * Transfer active class in nav links
 * @returns null
 */
function transferActive() {
    let classes = this.className;
    getContent(classes.replace(" active", ""));
    if (classes.includes("active")) return;
    $(".active")[0].classList.remove("active");
    this.classList.add("active");
}

/**
 * Submits the record info to edit stock form template
 * @param {String} code the id of the record
 */
function edit_stock(code) {
    $.post("template/update_stock.php", { code: code }, function (res) {
        $(".content")[0].innerHTML = res;
    });
}

/**
 * Submits the record info to receive form template
 * @param {String} code the id of the record
 */
function receive(code) {
    $.post("template/receiving_form.php", { code: code }, function (res) {
        $(".content")[0].innerHTML = res;
    });
}

/**
 * Submits the record info to release form template
 * @param {String} code the id of the record
 */
function release(code) {
    $.post("template/releasing_form.php", { code: code }, function (res) {
        $(".content")[0].innerHTML = res;
    });
}

/**
 * Handle all form submissions
 * @param {*} e submission event
 */
function formsSubmissions(e) {
    let target = {
        category: "new_category",
        stock: "new_stock",
        update_stock: "update_stock",
        receiving_form: "receive_stock",
        releasing_form: "release_stock",
        delete_stock: "delete_record",
        delete_releasing: "delete_record",
        delete_receiving: "delete_record",
    };
    let id = e.target.id;
    if (checkRequired(id)) {
        $.post(`api/${target[id]}.php`, getAllInput(id), function (response) {
            if (id != "update_stock") clear();
            alert(response);
        });
    }
    e.preventDefault();
}

/**
 * Check if all required fields were submitted
 * @param {String} id the id of the form
 * @returns {Boolean} Whether the form is valid and have all required fields
 */
function checkRequired(id) {
    let valid = true;
    $(`#${id} [require]`).each(function () {
        if ($(this).is(":invalid") || !$(this).val()) valid = false;
    });
    if (!valid) alert("Fill fields with *");
    return valid;
}

/**
 * Gets all the input values of a form#id
 * @param {String} id the id of the form
 * @returns {Object} key:value pair, where key is the input name and its value
 */
function getAllInput(id) {
    var data = $(`#${id}`)
        .serializeArray()
        .reduce(function (obj, item) {
            obj[item.name] = item.value;
            return obj;
        }, {});
    return data;
}

// embedded in buttons
$("li").click(transferActive);
$(".content").on("click", ".clear", clear); // handle click events in Dom generated buttons
$(".content").on("click", ".delete-category", () => {
    getContent("delete_category");
});

$(".content").on("submit", "form", (e) => {
    formsSubmissions(e);
});
//default display
getContent("stockinv");
$("input").attr("autocomplete", "off");
