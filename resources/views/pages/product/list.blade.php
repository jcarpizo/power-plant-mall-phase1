<section class="content-header">
    <h1>
        @{{ params.merchantName }}
        <small>Control panel</small>
    </h1>
</section>


<section class="content">
    @include('pages.product.create')
    @include('pages.product.update')
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <div class="btn-group">
                        <button type="button" class="btn btn-primary " data-toggle="modal" data-target="#newProduct" data-ng-click="product = {merchant_id:params.merchantId}">
                            New Product
                        </button>
                    </div>
                    <div class="box-tools">
                        <div class="input-group input-group-sm" style="width: 350px;">
                            <input type="text"  class="form-control pull-right" placeholder="Search Product" data-ng-model="search.products">
                        </div>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                    <table class="table table-hover table-striped">
                        <tr class="active">
                            <th>ID</th>
                            <th>Name</th>
                            <th>Brand</th>
                            <th>SKU</th>
                            <th>Price</th>
                            <th>Description</th>
                            <th>&nbsp;</th>
                        </tr>
                        <tr data-ng-repeat="products in products.products | filter:search.products | orderBy:products.name as results">
                            <td>@{{$index+1}}</td>
                            <td><label>@{{ products.name }}</label></td>
                            <td>@{{ products.brand }}</td>
                            <td>@{{ products.sku }}</td>
                            <td>@{{ products.price }}</td>
                            <td>@{{ products.description }}</td>
                            <td><button class="btn btn-primary small pull-right" data-toggle="modal" data-target="#updateProduct" data-ng-click="getProductObj(products)"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                        </tr>
                        <tr>
                            <td class="text-center" colspan="6" ng-if="results.length === 0">
                                <strong>No Products found...</strong>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="box-footer clearfix">
                    <ul class="pagination pagination-sm no-margin pull-right">
                        <li><a href="#">&laquo;</a></li>
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">&raquo;</a></li>
                    </ul>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
    </div>
</section>



