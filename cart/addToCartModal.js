// set modal content
const addToCartModal = document.getElementById('addToCartModal')
let quantity = 1;
let id;

addToCartModal.addEventListener('show.bs.modal', event => {
    // Button that triggered the modal
    const td = event.relatedTarget;

    // Extract info from data-bs-* attributes
    // set id, for session
    id = td.getAttribute('id');
    const image = td.getAttribute('data-bs-image');
    const item_name = td.getAttribute('data-bs-item_name');
    let unit_price = td.getAttribute('data-bs-unit_price');
    quantity = 1; // quantity always 1 when modal open

    // Update the modal's content.
    const bodyImg = addToCartModal.querySelector('.modal-body img');
    const bodyItemName = addToCartModal.querySelector('.modal-body #addModal_item_name');
    const footerQuantity = addToCartModal.querySelector('.modal-footer #addModal_quantity');
    const footerSubtotal = addToCartModal.querySelector('.modal-footer span');

    bodyImg.src = "../images/item/" + image;
    bodyItemName.innerHTML = item_name;
    footerQuantity.innerHTML = quantity;
    footerSubtotal.innerHTML = unit_price;

    // set data-unit_price for the minus and plus button
    footerSubtotal.dataset.unit_price = unit_price;
});

// event for add to cart button in addToCartModal
document.getElementById('addToCart_btn').addEventListener('click', function () {
    accessSessionByAction(id, quantity, 'store');
});