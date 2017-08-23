@extends('admin.layouts.master')

@section('content')
    <!-- page content -->
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row wrapper border-bottom white-bg page-heading">
            <div class="col-md-12">

                @include('partial.flash-message')

                <h2>Setting</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Setting Table</h5>
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
                        <div class="setting">
                            <div class="alert alert-success">{{Session('message')}}</div>
                            <form action="{{ url('admin/update/setting') }}" method="post" class="form-horizontal">
                                {{csrf_field()}}
                                <input type="hidden" name="id" value="{{@$setting->id}}">
                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="site_name"> Site Name</label>
                                    <div class="col-md-8">
                                        <input type="text" name="site_name" class="form-control" placeholder="Site name"
                                               value="{{@$setting->site_name}}">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="onder_amount">Order Amount(%)</label>
                                    <div class="col-md-8">
                                        <input type="text" name="onder_amount" class="form-control" placeholder="Order Amount Percentage"
                                               value="{{@$setting->onder_amount}}">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="name">Per Page Data Show</label>
                                    <div class="col-md-8">
                                        <input type="text" name="par_page_show" class="form-control" placeholder="Per Page Data Show"
                                               value="{{@$setting->par_page_show}}">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="site_mode">Site Mode</label>
                                    <div class="col-md-8">
                                        <label class="radio-inline">
                                            <input type="radio" name="site_mode">Live
                                        </label>
                                        <br>
                                        <label class="radio-inline">
                                            <input type="radio" name="site_mode">Development
                                        </label>

                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-3 control-label"></label>
                                    <div class="col-md-8">
                                        <button type="submit" class="btn btn-primary pull-right">Update</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection