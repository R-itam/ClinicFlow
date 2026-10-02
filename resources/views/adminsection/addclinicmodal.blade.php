<div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title">Add Clinic</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form role="form" id="addProductForm" name="user_rate_template_setup">
            <div class="modal-body">

                <div class="card">
            <div class="card-body p-4">
                <div class="row">
                  <div class="col-md-6 mb-3">
                    <label for="productName" class="form-label">Product Name</label>
                    <input type="text" class="form-control" id="productName" placeholder="Enter product name" required>
                  </div>
                  <div class="col-md-6 mb-3">
                    <label for="productSKU" class="form-label">SKU</label>
                    <input type="text" class="form-control" id="productSKU" placeholder="Enter SKU" required>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6 mb-3">
                    <label for="productPrice" class="form-label">Price</label>
                    <input type="number" class="form-control" id="productPrice" placeholder="0.00" step="0.01" required>
                  </div>
                  <div class="col-md-6 mb-3">
                    <label for="productStock" class="form-label">Stock Quantity</label>
                    <input type="number" class="form-control" id="productStock" placeholder="0" required>
                  </div>
                </div>

                <div class="mb-3">
                  <label for="productCategory" class="form-label">Category</label>
                  <select class="form-select" id="productCategory" required>
                    <option value="">Select category</option>
                    <option value="electronics">Electronics</option>
                    <option value="clothing">Clothing</option>
                    <option value="food">Food</option>
                  </select>
                </div>
                <div class="mb-3">
                  <label for="productImage" class="form-label">Product Image</label>
                  <input type="file" class="form-control" id="productImage" accept="image/*" required>
                </div>
                <div class="mb-3">
                  <label for="productDescription" class="form-label">Description</label>
                  <textarea class="form-control" id="productDescription" rows="4"
                    placeholder="Enter product description"></textarea>
                </div>

            </div>
          </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="sub_btn" onclick="save_user_template('')">Save changes</button>
            </div>
        </form>
    </div>
</div>