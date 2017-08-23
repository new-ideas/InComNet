@extends('admin.layouts.master')

@section('content')
    <!-- page content -->
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row wrapper border-bottom white-bg page-heading">
            <div class="col-md-12">

                @include('partial.flash-message')

                <h2>Bayer</h2>
                <ol class="breadcrumb">
                    <li>
                        <a href="">Deshboard</a>
                    </li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Company Table</h5>
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
                                    onclick="return addNewCompany()"><i class="fa fa-plus"></i> New Company
                            </button>
                        </div>
                        <div class="table-rasponsive">

                            <div class="alert alert-success alert-dismissable" id="notifications">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                                {{session('message')}}
                            </div>


                            <table class="table table-striped table-bordered view-cat-table">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Company Name</th>
                                    <th>Status</th>
                                    <th class="text-center">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                {{--@foreach($bayers as $bayer)--}}
                                    {{--<tr>--}}
                                        {{--<td>{{$bayer->name}}</td>--}}
                                        {{--<td>{{$bayer->user_name}}</td>--}}
                                        {{--<td>{{$bayer->email}}</td>--}}
                                        {{--<td>--}}
                                            {{--<span class="label {{$bayer->status==1 ? 'label-success':'label-danger'}}">--}}
                                                {{--{{$bayer->status==1?'Active':'Inactive'}}--}}
                                            {{--</span>--}}
                                        {{--</td>--}}
                                        {{--<td class="text-center">--}}
                                            {{--<div class="btn-group">--}}
                                                {{--<button class="btn btn-info btn-sm"--}}
                                                        {{--onclick="return edit_bayer('{{$bayer->id}}');">Edit--}}
                                                {{--</button>--}}
                                                {{--<a href="{{url('admin/delete/'.$bayer->id)}}"--}}
                                                   {{--class="btn btn-danger btn-sm"--}}
                                                   {{--onclick="return confirm('Are you sure ?')">Delete</a>--}}
                                            {{--</div>--}}
                                        {{--</td>--}}
                                    {{--</tr>--}}
                                {{--@endforeach--}}
                                </tbody>
                            </table>
                        </div>
                        {{--@if($bayers->links())--}}
                            {{--<div class="pull-left">--}}
                                {{--Showing {{$bayers->firstItem()}} to {{$bayers->lastItem()}}--}}
                                {{--of {{$bayers->total()}}--}}
                            {{--</div>--}}
                            {{--<div id="page_num" class="pull-right">--}}
                                {{--{{$bayers->links()}}--}}
                            {{--</div>--}}
                        {{--@endif--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection