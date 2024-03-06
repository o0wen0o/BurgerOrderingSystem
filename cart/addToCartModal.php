<!-- Modal -->
<div class="modal fade" id="addToCartModal" tabindex="-1" aria-labelledby="addToCartModalLabel" aria-hidden="true">
    <div class="modal-dialog" style="max-width: 650px">
        <div class="modal-content">
            <!-- header -->
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="addToCartModalLabel">Add To Cart</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <!-- body -->
            <div class="modal-body">
                <div class="mb-3"><img src="" class="rounded" alt="item_image" width="200"></div>
                <div class="mb-3" id="addModal_item_name"></div>
                <label for="addModal_remarks" class="col-form-label">Remarks:</label>
                <textarea class="form-control" id="addModal_remarks"
                          placeholder="Specify instructions for this order."></textarea>
            </div>

            <!-- footer -->
            <div class="modal-footer">
                <div class="btn-group me-auto">
                    <button class="btn btn-danger" onclick="minus()">-</button>
                    <div class="text-center m-auto" id="addModal_quantity" style="width: 40px">1</div>
                    <button class="btn btn-danger" onclick="plus()">+</button>
                </div>

                <div class="me-auto fw-bold fs-5">
                    Total: RM
                    <span data-unit_price="0"></span>
                </div>

                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-danger" data-bs-dismiss="modal" id="addToCart_btn">
                    Add To Cart
                </button>
            </div>
        </div>
    </div>
</div>