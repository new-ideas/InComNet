@extends('admin.layouts.master')

@section('content')
    <div class="row white-bg dashboard-header">
        <div class="row wrapper border-bottom white-bg page-heading">
            <div class="col-md-12">

                @include('partial.flash-message')

                <h2>Skills</h2>
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
                        <h5>Skills</h5>
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
                        <button type="button" class="btn btn-primary" onclick="return add_new_skill();"><i
                                    class="fa fa-plus"></i>
                            Add New Skills
                        </button>
                        <div class="table-response">
                            <div class="text-center">{{Session('message')}}</div>
                            <table class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <td>#</td>
                                    <th>Skills Name</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @if(count($skills)>0)
                                    @foreach($skills as $key=>$skill)
                                        <tr>
                                            <td>{{++$key}}</td>
                                            <td>{{$skill->name}}</td>
                                            <td>{{$skill->status}}</td>
                                            <td>
                                                <button type="button" class="btn btn-info"
                                                        onclick="return add_new_skill('{{$skill->id}}')">Edit
                                                </button>
                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td colspan="3">Data not found!!</td>
                                    </tr>
                                @endif
                                </tbody>
                            </table>
                        </div>
                        @if($skills->links())
                            <div class="pull-left">
                                Showing {{$skills->firstItem()}} to {{$skills->lastItem()}} of {{$skills->total()}}
                            </div>
                            <div id="page_num" class="pull-right">
                            {{$skills->links()}}
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection


