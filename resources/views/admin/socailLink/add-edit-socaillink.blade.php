<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
    </button>
    <h4 class="modal-title" id="myModalLabel"> Social Link</h4>
</div>
<form action="{{ route('social-link.store') }}" method="post" class="form-horizontal" enctype="multipart/form-data">
    <div class="modal-body">
        {{csrf_field()}}

        <input type="hidden" name="id" value="{{@$sociallink->id}}">
        <div class="form-group">
            <label class="col-md-3 control-label" for="name">Name</label>
            <div class="col-md-8">
                <input type="text" name="name" class="form-control" placeholder="Social link name"
                       required="required" value="{{@$sociallink->name}}">
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label" for="name">Icon</label>
            <div class="col-md-8">
                @if(@$sociallink->iconurl)
                    <input type="hidden" name="old_image" value="{{@$sociallink->icon}}">
                    <img src="{{@$sociallink->iconurl}}" alt="icon" width="50" height="50">
                @endif
                <input type="file" name="icon" class="form-control" placeholder="Icon"
                        {!! @$sociallink->id?'':'required="required"'!!}>
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