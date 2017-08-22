@extends('layouts.layout')
@section('menu')
    @include('store.common.menu')
@endsection

@section('content')
    <!-- page content -->
    <div class="right_col" role="main">
        <div class="col-md-12 col-sm-12 col-xs-12">

            @if (session('success'))
                <div class="alert alert-success alert-dismissable" id="notifications">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                    {{session('success')}}
                </div>
            @endif

            @if (session('error'))
                <div class="alert alert-danger alert-dismissable" id="notifications">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                    {{session('error')}}
                </div>
            @endif

            <div class="x_panel">
                <div class="x_title">
                    <h2>Parent Category Management </h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>

                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <div class="form-group">
                        <button class="btn btn-success" type="button"
                                onclick="addNewCategory('parent-category','store')"> <i class="fa fa-plus"></i> Add New Category</button>
                    </div>
                    <div id="view-data">
                        <!-- VIEW CATEGORY COMMON PAGE -->
                    @include('store.category.parent_category_common')
                    <!-- END -->
                    </div>
                </div>
            </div>
        </div>

        <!-- End Main content -->
    </div>
@endsection

@section('modal')
    @include('modal.common_modal');
@endsection