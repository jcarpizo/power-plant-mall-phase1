<div class="modal fade" id="updateMerchant" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel" data-ng-bind="merchant.name">?</h4>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" data-ng-model="merchant.name" class="form-control" placeholder="Name">
                </div>
                <div class="form-group">
                    <label>Address</label>
                    <textarea class="form-control" data-ng-model="merchant.address" placeholder="Address"></textarea>
                </div>
                <div class="form-group">
                    <label>Upload Logo</label>
                    <input type="file" data-ng-model="merchant.logo" class="form-control" >
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger pull-left" data-ng-click="deleteMerchant(merchant.id)">Delete</button>
                <button type="button" class="btn btn-primary" data-ng-click="updateMerchantById(merchant.id)">Update</button>
            </div>
        </div>
    </div>
</div>