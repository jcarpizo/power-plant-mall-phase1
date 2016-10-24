<section class="content-header">
    <h1>
        News
        <small>Control panel</small>
    </h1>
</section>

<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css">
<style>
    /*#sortable1, #sortable2 {*/
        /*!*min-height: 20px;*!*/
        /*!*list-style-type: none;*!*/
        /*!*margin: 0;*!*/
        /*!*padding: 5px 0 0 0;*!*/
        /*!*float: left;*!*/
        /*!*margin-right: 10px;*!*/
    /*}*/

    /*#sortable1 li, #sortable2 li {*/
        /*margin: 0 5px 5px 5px;*/
        /*padding: 5px;*/
        /*width: 120px;*/
    /*}*/
</style>

<script>
    $(function () {
        $("#sortable1, #sortable2").sortable({
            connectWith: ".connectedSortable"
        }).disableSelection();
    });
</script>

<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                {{--<div class="box-header with-border">--}}
                    {{--<h3 class="box-title">Monthly Recap Report</h3>--}}
                {{--</div>--}}
                <div class="box-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Products</h3>
                                </div>
                                <div class="panel-body">
                                    <ul id="sortable1" class="connectedSortable list-group">
                                        <li class="ui-state-default list-group-item">Item 1</li>
                                        <li class="ui-state-default list-group-item">Item 2</li>
                                        <li class="ui-state-default list-group-item">Item 3</li>
                                        <li class="ui-state-default list-group-item">Item 4</li>
                                        <li class="ui-state-default list-group-item">Item 5</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">News</h3>
                                </div>
                                <div class="panel-body">
                                    <ul id="sortable2" class="connectedSortable list-group">
                                        <li class="ui-state-default list-group-item">Item 1</li>
                                        <li class="ui-state-default list-group-item">Item 2</li>
                                        <li class="ui-state-default list-group-item">Item 3</li>
                                        <li class="ui-state-default list-group-item">Item 4</li>
                                        <li class="ui-state-default list-group-item">Item 5</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



