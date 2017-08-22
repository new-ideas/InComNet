<style>
    .collapse {
        display: none;
    }

    .collapse.in {
        display: inline;
    }

    .label-default, .label-danger {
        margin-left: 5px;
    }
</style>
<!-- User empty check -->
@if (isset($categories) && !empty($categories))
    <table class="table table-striped table-bordered view-cat-table">
        <thead>
        <tr>
            <th>Category Name</th>
            <th>Sub Categories</th>
            <th>Status</th>
            <th class="text-center">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($categories as $category)
            <tr>
                <td class="sorting_2" width="300">
                    <div class="col-md-3">
                        @if($category->imageurl)
                            <a href="{{$category->imageurl}}" target="_blank">
                                <img src="{{$category->imageurl}}" alt="" class="img-responsive">
                            </a>
                        @else
                            <img src="{{asset('images/imagenotfound.svg')}}" alt="" class="img-responsive">
                        @endif
                    </div>
                    <a style="display: inline;" href="{{route('product.list',[$category->alias])}}">
                        <h4>{{$category->name}}</h4></a>
                </td>
                <td width="50%">

                    @php
                        $sub_categories = $category->subCategory;
                    @endphp
                    @if($sub_categories && count($sub_categories)>0)
                        @php
                            $i=1;
                        @endphp
                        @foreach($sub_categories as $sub_category)
                            @if ($i > 3)
                                @if ($i == 4)
                                    <div class="collapse" id="parent-{{$category->id}}">
                                        @endif
                                        <span class="label {{$sub_category->status==1?'label-default':'label-danger'}}"
                                              style="font-size: 12px;line-height: 2.11; font-weight: normal;"
                                              data-toggle="tooltip"
                                              title="{{$sub_category->status==1?'Active':'Inactive'}}">
                                    <a style="color: #fff;"
                                       href="{{route('product.search',[$sub_category->alias])}}">{{$sub_category->name}}</a>
                                </span>
                                        @if ($i == count($category['sub_categories']))
                                    </div>
                                    <button data-toggle="collapse" class="btn btn-primary btn-xs"
                                            style="margin-bottom: 0; margin-left: 5px;"
                                            data-target="#parent-{{$category->id}}">Show/Hide
                                        more
                                    </button>
                                @endif
                            @else
                                <span class="label {{$sub_category->status==1?'label-default':'label-danger'}}"
                                      data-toggle="tooltip" title="{{$sub_category->status==1?'Active':'Inactive'}}"
                                      style="font-size: 12px;line-height: 2.11; font-weight: normal;">
                                    <a style="color: #fff;"
                                       href="{{route('product.search',[$sub_category->alias])}}">{{$sub_category->name}}</a>
                                </span>
                            @endif
                            @php
                                $i++;
                            @endphp
                        @endforeach

                    @else
                        <span class="label label-danger">Not found</span>
                    @endif
                </td>
                <td>
                    @if($category->status == 1)
                        <span class="label label-primary" style="margin-left: 0;">Active</span>
                    @else
                        <span class="label label-danger" style="margin-left: 0;">InActive</span>
                    @endif
                </td>
                <td class="sorting_3 text-center">
                    <button type="button" class="btn btn-primary btn-xs"
                            onclick="return edit_sub_category('{{$category->id}}','parent-category','store');"><i
                                class="fa fa-edit"></i></button>
                    <button type="button" class="btn btn-danger btn-xs"
                            onclick="return delete_sub_category('{{$category->id}}','store','parent');"><i
                                class="fa fa-trash"></i></button>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <!-- /.table table-striped -->
    @if(isset($categories) && !empty($categories->links()))
        <div class="pull-left">
            Showing {{$categories->firstItem()}} to {{$categories->lastItem()}} of {{$categories->total()}}
        </div>
        <div class="pull-right" id="page_num">
            {{$categories->links()}}
        </div>
    @endif
@else
    <p class="alert alert-danger text-center">Category not found</p>
@endif
<!-- User empty check END -->