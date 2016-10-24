<div class="modal fade " id="newProduct" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog " role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">New Product</h4>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" data-ng-model="product.name" class="form-control" placeholder="Name">
                </div>
                <div class="form-group">
                    <label>Description</label>
                    <textarea class="form-control" data-ng-model="product.description"
                              placeholder="Description"></textarea>
                </div>
                <div class="form-group">
                    <label>Brand</label>
                    <input type="text" data-ng-model="product.brand" class="form-control" placeholder="Brand">
                </div>
                <div class="form-group">
                    <label>SKU</label>
                    <input type="text" data-ng-model="product.sku" class="form-control" placeholder="SKU">
                </div>
                <div class="form-group">
                    <label>Price</label>
                    <input type="text" data-ng-model="product.price" class="form-control" placeholder="Price">
                </div>
                <div class="form-group">
                    <label>Others</label>
                    <input type="text" data-ng-model="product.others" class="form-control" placeholder="Others">
                </div>
                <div class="form-group">
                    <label>Upload Logo</label>
                    <input type="file" data-ng-model="product.image" class="form-control">
                </div>
            </div>
            <div class="modal-footer">
                <input type="hidden" data-ng-model="product.merchant_id" data-ng-init="product = {merchant_id:params.merchantId}">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" data-ng-click="addProduct()">Save changes</button>
            </div>
        </div>
    </div>
</div>