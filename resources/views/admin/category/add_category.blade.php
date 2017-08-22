<div class="modal-header">
    <h2 class="modal-title">Add {{$type=='parent-category'?'Parent':'Sub'}} Category</h2>
</div>

<form name="category_form" id="category_form"
      action="{{route('category.store')}}"
      class="form-horizontal form-label-left"
      method="post"
      enctype="multipart/form-data" onsubmit="return save_es_category($(this))">
    <div class="modal-body">
        {{csrf_field()}}
        <div class="form-group">
            <label class="control-label col-md-3"
                   for="category_name">Category Type
            </label>
            <div class="col-md-8">
                <select name="category_type"
                        id="category-type"
                        class="form-control"
                        onchange="check_category_type(this.value);">
                    @if($type==='sub-category')
                        <option value="1" selected="selected">
                            Sub
                            Category
                        </option>
                    @elseif($type==='parent-category')
                        <option value="0">Parent Category
                        </option>
                    @endif
                </select>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-md-3" for="category_name">Category
                Name <abbr title="Required">*</abbr>:
            </label>
            <div class="col-md-8">
                <input type="text" id="category_name"
                       name="name"
                       class="form-control col-md-8 col-xs-12"
                       placeholder="Name">
                <label for="category_name"
                       id="category_name-error"
                       class="error"
                       style="display: none;"></label>
            </div>
        </div>

        @if($type==='parent-category')
            <div class="form-group" id="parent_category_img">
                <label class="control-label col-md-3" for="category_image">Image <abbr title="Required">*</abbr>:
                </label>
                <div class="col-md-8">
                    <input type="file" id="category_image"
                           name="category_image"
                           class="form-control col-md-8 col-xs-12"
                           placeholder="Image" accept="image/*">
                    <label for="category_image"
                           id="category_image-error"
                           class="error"
                           style="display: none;"></label>
                </div>
            </div>
        @endif

        @if($type==='sub-category')
            <div class="form-group" id="parent_category_list">
                <label class="control-label col-md-3"
                       for="last-name">Parent Category
                </label>
                <div class="col-md-8">
                    <select name="parent_category_id"
                            class="form-control"
                            id="parent_category_id"
                            data-placeholder="Select parent category">
                        <option></option>
                        @if (!empty($parent_categories))
                            @foreach ($parent_categories as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                        @endif
                    </select>
                    <label for="parent_category_id"
                           id="parent_category_id-error"
                           class="error"
                           style="display: none;"></label>
                </div>
            </div>
        @endif
        <div class="show-message col-md-8 col-md-offset-3" id="notifications"></div>
        <div class="clearfix"></div>
    </div>
    <div class="modal-footer text-center">
        <div class="col-md-11">
            <button type="button" style="margin-bottom: 0;" class="btn btn-danger"
                    onclick="closeModal('#common-modal');">Cancel
            </button>
            <button type="submit" name="action" value="Save" id="save_category" class="btn btn-success">Submit</button>
        </div>
    </div>
</form>

<script>
    $('#parent_category_id').select2();
</script>


