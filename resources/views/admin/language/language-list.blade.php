@extends('admin.layouts.master')

@section('content')
    <div class="row white-bg dashboard-header">
        <div class="row wrapper border-bottom white-bg page-heading">
            <div class="col-md-12">

                @include('partial.flash-message')

                <h2>Language</h2>
                <ol class="breadcrumb">
                    <li>
                        <a href="">Deshboard</a>
                    </li>
                </ol>
            </div>
        </div>

        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Language</h5>
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
                        <button type="button" class="btn btn-primary" onclick="return new_language();"><i
                                    class="fa fa-plus"></i>
                            New Language
                        </button>
                        <div class="table-response">
                            <div class="text-center">{{Session('message')}}</div>
                            <table class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <td>#</td>
                                    <th>Language Name</th>
                                    <th>Status</th>
                                    <th class="text-center">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($languages as $key=>$language)
                                    <tr>
                                        <td>{{++$key}}</td>
                                        <td>{{ $language->name }}</td>
                                        <td>{!! $language->status?'<span class="label label-success">Active</span>':'<span class="label label-danger">In-Active</span>' !!}</td>
                                        <td class="text-center">
                                            <div class="btn-group">
                                                <button class="btn btn-info btn-sm"
                                                        onclick="return edit_language('{{$language->id}}');">Edit
                                                </button>
                                                <a href="{{url('admin/delete/'.$language->id)}}"
                                                   class="btn btn-danger btn-sm"
                                                   onclick="return confirm('Are you sure ?')">Delete</a>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection


