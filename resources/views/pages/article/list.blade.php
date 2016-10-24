<section class="content-header">
    <h1>
        Articles
        <small>Control panel</small>
    </h1>
</section>


<section class="content" >
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <div class="btn-group">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#newMerchant" data-ng-click="merchant = {}">
                            New Merchant
                        </button>
                    </div>
                    <div class="box-tools">
                        <div class="input-group input-group-sm" style="width: 350px;">
                            <input type="text"  class="form-control pull-right" placeholder="Search Merchant" data-ng-model="search.merchant">
                        </div>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                    {{--<table class="table table-hover table-striped">--}}
                        {{--<tr class="active">--}}
                            {{--<th width="10%">ID</th>--}}
                            {{--<th width="30%">Name</th>--}}
                            {{--<th>Address</th>--}}
                            {{--<th>&nbsp;</th>--}}
                        {{--</tr>--}}
                        {{--<tr data-ng-repeat="merchants in merchants.merchants | filter:search.merchant | orderBy:merchants.name">--}}
                            {{--<td>@{{$index+1}}</td>--}}
                            {{--<td><label>@{{ merchants.name }}</label></td>--}}
                            {{--<td>@{{ merchants.address }}</td>--}}
                            {{--<td><button class="btn btn-primary small pull-right" data-toggle="modal" data-target="#updateMerchant" data-ng-click="getMerchantObj(merchants)"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>--}}
                    {{--</table>--}}
                </div>
                {{--<div class="box-footer clearfix">--}}
                    {{--<ul class="pagination pagination-sm no-margin pull-right">--}}
                        {{--<li><a href="#">&laquo;</a></li>--}}
                        {{--<li><a href="#">1</a></li>--}}
                        {{--<li><a href="#">2</a></li>--}}
                        {{--<li><a href="#">3</a></li>--}}
                        {{--<li><a href="#">&raquo;</a></li>--}}
                    {{--</ul>--}}
                {{--</div>--}}
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
    </div>
</section>



