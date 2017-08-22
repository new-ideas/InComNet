@extends('admin.layouts.master')
<style>
    #page_num ul{
        margin: 0;
    }
</style>
@section('content')

    @include('admin.partial.page-header')

    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-xs-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Subcategory Table</h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                <i class="fa fa-wrench"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-user">
                                <li><a href="#">Config option 1</a>
                                </li>
                                <li><a href="#">Config option 2</a>
                                </li>
                            </ul>
                            <a class="close-link">
                                <i class="fa fa-times"></i>
                            </a>
                        </div>
                    </div>
                    <div class="ibox-content">
                        <div class="form-group">
                            <button class="btn btn-success" type="button"
                                    onclick="addNewCategory('sub-category')"> <i class="fa fa-plus"></i> Add New Category</button>
                        </div>
                        @include('admin.category.sub_category_common')

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
