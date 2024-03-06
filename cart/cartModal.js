// set modal content
const cartModal_1 = document.getElementById('cartModal_1');
let tbody = $('#cartModal_table');

// when modal is hide, store all quantity to session
// to save the change occur in cart modal
cartModal_1.addEventListener('hidden.bs.modal', event => {
    $('.quantity').each(function () {
        accessSessionByAction($(this).data('id'), $(this).text(), 'store');
    });
});

cartModal_1.addEventListener('show.bs.modal', event => {
    // when modal open, deselect the checkbox
    $('#check_item_all').prop('checked', false);

    // get data from session and database
    let xhr = new XMLHttpRequest();

    xhr.open('POST', 'http://localhost/BurgerOrderingSystem/cart/accessSessionByAction.php', true);

    // Set the request header
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

    // Handle the AJAX response
    xhr.onload = function () {
        if (xhr.readyState === 4 && xhr.status === 200) {
            let text = this.responseText;
            let data = text.substring(0, text.length - 1); // to avoid the last '|'
            console.log(data);

            // if session is empty
            if (!data) {
                tbody.empty();

                // add a message show empty cart
                let empty = $('<td>')
                    .attr('colspan', 5)
                    .css('text-align', 'center')
                    .text('Cart is empty.');
                tbody.append(empty);

                // disable proceed button
                $('#proceedToCheckout').prop('disabled', true);
                return;

            } else {
                $('#proceedToCheckout').prop('disabled', false);
            }

            tbody.empty();

            // if session is not empty
            // Create the table body rows
            generateCart(data);
        }
    };

    xhr.send("action=retrieve");
});

function generateCart(data) {
    // split data by '|'
    let rows = data.split('|');

    //content
    for (let i = 0; i < rows.length; i++) {
        // split data by ','
        let items = rows[i].split(',');

        let tr = $('<tr>');

        // image_name, item_name, quantity, unit_price, id
        let tableCell = ["checkbox", items[0], items[1], items[2], items[3], items[4]];

        // map() method to create an array for 'td', textContent is the properties
        let tableData = tableCell.map((m, index) => {
            let cellData = $('<td>');

            if (index === 0) {
                // add a checkbox before img
                // <td><input type="checkbox" class="check_item"></td>
                let checkbox = $('<input>').attr('type', 'checkbox').addClass('check_item');

                cellData.append(checkbox);

            } else if (index === 1) {
                // <img src="../images/item/item_test.png" class="rounded" alt="item_image" width="100">
                let img = $('<img>').attr('src', 'http://localhost/BurgerOrderingSystem/images/item/' + m).addClass('rounded').attr('alt', 'item_image').attr('width', '100');

                cellData.append(img);

            } else if (index === 2) {
                cellData.text(m);

            } else if (index === 3) {
                // <div class="btn-group">
                //     <button class="btn btn-danger" onClick="minus()">-</button>
                //     <div class="quantity text-center m-auto" data-id="0" style="width: 40px">1</div>
                //     <button class="btn btn-danger" onClick="plus()">+</button>
                // </div>
                let div = $('<div>').addClass('btn-group');

                // add minus btn and event to div
                let minusBtn = $('<button>').addClass('btn btn-danger').text('-');
                minusBtn.click(minus);

                // add text to div
                // set data-id for the minus and plus button
                let text = $('<div>').addClass('quantity text-center m-auto').attr('data-id', items[4]).css('width', '40px').text(m);

                // add plus btn and event to div
                let plusBtn = $('<button>').addClass('btn btn-danger').text('+');
                plusBtn.click(plus);

                div.append(minusBtn);
                div.append(text);
                div.append(plusBtn);

                cellData.append(div);

            } else if (index === 4) {
                // <span class="subtotal" data-id="0" data-unit_price="0"></span>
                let span = $('<span>').addClass('subtotal');

                // set data-unit_price for the minus and plus button
                span.attr('data-unit_price', m);

                cellData.text('RM ');
                span.text((m * items[2]).toFixed(2));

                cellData.append(span);
            }

            return cellData;
        });

        // append the array of 'td' to 'tr'
        tr.append(tableData);

        // append 'tr' to 'table'
        tbody.append(tr);
    }

    let $td123 = $('<td>').attr('colspan', 3);
    let $td4 = $('<td>').addClass('fs-5 fw-bold pt-3').text('Total: ');
    let $td5 = $('<td>').addClass('fs-5 fw-bold pt-3').text('RM ').attr('id', 'totalPrice');
    tbody.append($td123, $td4, $td5);

    calculateTotal();
}

// control minus and plus button
let btnGroup;
let quantityDiv;
let subtotal;

// minus button
function minus() {
    btnGroup = event.target.parentElement;

    quantityDiv = btnGroup.querySelector('div');
    quantity = parseInt(quantityDiv.innerText);

    if (quantity > 1) {
        quantityDiv.innerText = --quantity;

        // change subtotal and total
        changeSubtotal();
        calculateTotal();
    }
}

// plus button
function plus() {
    btnGroup = event.target.parentElement;

    quantityDiv = btnGroup.querySelector('div');
    quantity = parseInt(quantityDiv.innerText);

    quantityDiv.innerText = ++quantity;

    // change subtotal and total
    changeSubtotal();
    calculateTotal()
}

function changeSubtotal() {
    subtotal = btnGroup.parentElement.parentElement.querySelector('.subtotal, span')
    let unit_price = subtotal.dataset.unit_price;

    subtotal.innerText = (unit_price * quantityDiv.innerText).toFixed(2);
}

// calculate when cart modal shown or button event triggered
function calculateTotal() {
    let sum = 0;

    $('.subtotal').each(function () {
        sum += parseInt($(this).text());
    });

    $('#totalPrice').text("RM " + sum.toFixed(2));
}

// send AJAX request to accessSessionByAction.php which can change the value in session.
function accessSessionByAction(id_toSession, qty_toSession, action) {
    let xmlHttpRequest = new XMLHttpRequest();

    xmlHttpRequest.open("POST", "http://localhost/BurgerOrderingSystem/cart/accessSessionByAction.php", true);

    // Set the request header
    xmlHttpRequest.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

    xmlHttpRequest.onreadystatechange = function () {
        if (xmlHttpRequest.readyState === 4 && xmlHttpRequest.status === 200) {
            console.log(this.responseText);
        }
    }

    let message = "&id=" + encodeURIComponent(id_toSession) +
        "&quantity=" + encodeURIComponent(qty_toSession);

    xmlHttpRequest.send("action=" + action + message);
}

function closeSession() {
    let xhr = new XMLHttpRequest();

    xhr.open("POST", "http://localhost/BurgerOrderingSystem/cart/closeSession.php", true);

    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4 && xhr.status === 200) {
            console.log(this.responseText);
        }
    }

    xhr.send();
}

// to enable or disable form in cartModal_2
function orderDetailDisabled(option) {
    let orderDetail = document.getElementsByClassName('orderDetail');

    if (option.value === 'Dine In') {
        for (const input of orderDetail) {
            input.value = "";
            input.disabled = true;
        }

    } else {
        for (const input of orderDetail) {
            input.disabled = false;
        }
    }
}

// Select all checkboxes
$('#check_item_all').on('click', function () {
    $('.check_item').prop('checked', $(this).prop('checked'));
});

// Check if all checkboxes are checked
$(document).on("click", ".check_item", function () {
    let flag = $(".check_item:checked").length === $(".check_item").length;
    $('#check_item_all').prop('checked', flag);
});

// Remove selected items
$('#remove_selected').on('click', function () {
    let closestTr = $('.check_item:checked').closest('tr');

    // delete data in session
    let dataId;
    closestTr.find('.quantity').each(function () {
        dataId = $(this).data('id');
        accessSessionByAction(dataId, 0, 'delete')
    });

    // remove closest tr
    closestTr.remove();
    $('#check_item_all').prop('checked', false);

    //
    if ($('.check_item').length === 0) {
        $('#proceedToCheckout').prop('disabled', true);
    }

    calculateTotal();
});
