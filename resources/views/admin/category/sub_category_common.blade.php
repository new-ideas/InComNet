<!-- User empty check -->
@if (isset($sub_categories) && !empty($sub_categories))
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>Category Name</th>
            <th>Parent Category</th>
            <th>Status</th>
            <th class="text-center">Delete</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($sub_categories as $category)
            <tr>
                <td class="sorting_2">{{$category->name}}</td>
                <td class="sorting_3">{{@$category->parent->name}}</td>
                <td>
                    @if($category->status == 1)
                        <span class="label label-primary">Active</span>
                    @else
                        <span class="label label-danger">InActive</span>
                    @endif
                </td>
                <td class="sorting_3 text-center">
                    <button type="button" class="btn btn-primary btn-xs"
                            onclick="return edit_sub_category('{{$category->id}}','sub-category','store');"><i
                                class="fa fa-edit"></i></button>
                    <a class="deletecategory btn btn-danger btn-xs"
                       href="#"
                       onclick="return delete_sub_category('{{$category->id}}','store');">
                        <i class="fa fa-trash-o"></i>
                    </a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <!-- /.table table-striped -->
    @if (isset($sub_categories) && !empty($sub_categories->links()))
        <div class="pull-left">
            Showing {{$sub_categories->firstItem()}} to {{$sub_categories->lastItem()}} of {{$sub_categories->total()}}
        </div>
        <div class="pull-right" id="page_num" style="position: relative; top: -12px;">
            {{$sub_categories->links()}}
        </div>
    @endif
@else
    <p class="alert alert-danger text-center">Category not found</p>
@endif
<!-- User empty check END -->