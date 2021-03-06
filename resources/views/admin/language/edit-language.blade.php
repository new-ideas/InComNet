<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
    </button>
    <h4 class="modal-title" id="myModalLabel">Add Language</h4>
</div>
<form action="{{ url('admin/update') }}" method="post" class="form-horizontal">
    <div class="modal-body">
        {{csrf_field()}}
        <input type="hidden" name="id" value="{{@$language->id}}">
        <div class="form-group">
            <label class="col-md-3 control-label" for="name"> Name</label>
            <div class="col-md-8">
                <input type="text" name="name" class="form-control" placeholder="Language name"
                       required="required" value="{{$language->name}}">
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label" for="status">Status</label>
            <div class="col-md-8">
                <select class="form-control" name="status">
                    <option value="1" {{$language->status =='1' ? 'selected' : ''}}>Active</option>
                    <option value="0" {{$language->status =='0' ? 'selected' : ''}}>Inactive</option>
                </select>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <div class="col-md-8 col-md-offset-3">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>