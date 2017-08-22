@extends('admin.layouts.master')

@section('content')
    <div class="row white-bg dashboard-header">
        <div class="row wrapper border-bottom white-bg page-heading">
            <div class="col-md-12">

                @include('partial.flash-message')

                <h2>Country</h2>
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
                        <h5>Country</h5>
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
                        <button type="button" class="btn btn-primary" onclick="return new_country();"><i
                                    class="fa fa-plus"></i>
                            New Country
                        </button>
                        <div class="table-response">
                            <div class="text-center">{{Session('message')}}</div>
                            <table class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <td>#</td>
                                    <th>Country Code</th>
                                    <th>Country Name</th>
                                    <th>Dialing Code</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                {{--                                @if(count($sociallinks)>0)--}}
                                {{--@foreach($sociallinks as $key=>$sociallink)--}}
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>
                                        <div class="btn-group">
                                            <button class="btn btn-info btn-sm"
                                                    onclick="return add_new_socaillink('');">Edit
                                            </button>
                                            <a href="" class="btn btn-danger btn-sm"
                                               onclick="return confirm('Are you sure ?')">Delete</a>
                                        </div>
                                    </td>
                                </tr>
                                {{--@endforeach--}}
                                {{--@else--}}
                                <tr>
                                    <td colspan="5">Data not found</td>
                                </tr>
                                {{--@endif--}}
                                </tbody>
                            </table>
                        </div>

                        {{--                        @if($sociallinks->links())--}}
                        <div class="pull-left">
                            {{--                                Showing {{$sociallinks->firstItem()}} to {{$sociallinks->lastItem()}} of {{$sociallinks->total()}}--}}
                        </div>
                        <div id="page_num" class="pull-right">
                            {{--                                {{$sociallinks->links()}}--}}
                        </div>
                        {{--@endif--}}

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection


