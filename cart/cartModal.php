<!-- modal 1 -->
<div class="modal fade" id="cartModal_1" aria-hidden="true" aria-labelledby="cartModalLabel_1" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered" style="max-width: 800px">
        <div class="modal-content text-center">
            <!-- header -->
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="cartModalLabel_1">Your Order</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <!-- body -->
            <div class="modal-body">
                <table class="table table-hover align-middle">
                    <thead style="width: 800px">
                    <tr>
                        <td><input type="checkbox" id="check_item_all"></td>
                        <th>Item</th>
                        <th>Name</th>
                        <th>Quantity</th>
                        <th>Subtotal</th>
                    </tr>
                    </thead>

                    <tbody id="cartModal_table">
                    <!--  this is sample for cart -->
                    <!-- <tr>-->
                    <!--     <td><input type="checkbox" class="check_item"></td>-->
                    <!--     <td>-->
                    <!--         <img src="../images/item/item_test.png" class="rounded" alt="item_image" width="100">-->
                    <!--     </td>-->
                    <!--     <td>item_name</td>-->
                    <!--     <td>-->
                    <!--         <div class="btn-group">-->
                    <!--             <button class="btn btn-danger" onclick="minus()">-</button>-->
                    <!--             <div class="quantity text-center m-auto" data-id="0" style="width: 40px">1</div>-->
                    <!--             <button class="btn btn-danger" onclick="plus()">+</button>-->
                    <!--         </div>-->
                    <!--     </td>-->
                    <!--     <td>-->
                    <!--         Subtotal: RM-->
                    <!--         <span class="subtotal" data-unit_price="0">item_price</span>-->
                    <!--     </td>-->
                    <!-- </tr>-->
                    </tbody>
                </table>
            </div>

            <!-- footer -->
            <div class="modal-footer">
                <button class="btn btn-danger me-auto" id="remove_selected">
                    Delete
                </button>
                <button class="btn btn-danger" data-bs-target="#cartModal_2" data-bs-toggle="modal"
                        id="proceedToCheckout">
                    Proceed to checkout
                </button>
            </div>
        </div>
    </div>
</div>

<!-- modal 2 -->
<div class="modal fade" id="cartModal_2" aria-hidden="true" aria-labelledby="cartModalLabel_2" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered" style="max-width: 800px">
        <div class="modal-content">
            <!-- header -->
            <div class="modal-header">
                <button class="btn btn-danger" data-bs-target="#cartModal_1" data-bs-toggle="modal">Back</button>
                <h1 class="modal-title fs-5 ms-auto" id="cartModalLabel_2">Order Details</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <!-- body -->
            <div class="modal-body">
                <!--
                    order type:dine in,take away
                    firstname,lastname
                    phone no
                    address
                    cutlery
                -->
                <div class="input-group mb-3 mt-3">
                    <label class="input-group-text" for="inputGroupSelect01">Options</label>
                    <select class="form-select" onchange="orderDetailDisabled(this)">
                        <option value="Dine In" selected>Dine In</option>
                        <option value="Take Away">Take Away</option>
                    </select>
                </div>

                <div class="input-group mb-3">
                    <span class="input-group-text">First name</span>
                    <input type="text" aria-label="First name" class="orderDetail form-control" disabled>
                </div>

                <div class="input-group mb-3">
                    <span class="input-group-text">Last name</span>
                    <input type="text" aria-label="Last name" class="orderDetail form-control" disabled>
                </div>

                <div class="input-group mb-3">
                    <span class="input-group-text">Phone</span>
                    <input type="text" aria-label="phone" class="orderDetail form-control" disabled>
                </div>

                <div class="input-group mb-3">
                    <span class="input-group-text">Address</span>
                    <input type="text" aria-label="address" class="orderDetail form-control" disabled>
                </div>

                <div class="form-check mb-3">
                    <label class="form-check-label" for="cutlery">
                        Cutlery
                    </label>
                    <input class="orderDetail form-check-input" type="checkbox" disabled checked>
                </div>

                <div class="form-floating mb-3">
                    <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                    <label for="floatingTextarea">Remarks</label>
                </div>
            </div>

            <!-- footer -->
            <div class="modal-footer">
                <button class="btn btn-danger" data-bs-target="#cartModal_3" data-bs-toggle="modal"
                        onclick="closeSession()">Done
                </button>
            </div>
        </div>
    </div>
</div>

<!-- modal 3 -->
<div class="modal fade" id="cartModal_3" aria-hidden="true" aria-labelledby="cartModalLabel_3" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <!-- body -->
            <div class="modal-body d-flex justify-content-center">
                <img src="http://localhost/BurgerOrderingSystem/images/icon/successful.png" alt="successful"
                     width="150">
                <h3 class="mt-auto mb-auto">Successful!</h3>
            </div>
        </div>
    </div>
</div>