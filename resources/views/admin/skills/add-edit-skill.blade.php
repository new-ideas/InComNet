<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
    </button>
    <h4 class="modal-title" id="myModalLabel">{{@$skill->id?'Update':'Add'}} Skill</h4>
</div>
<form action="{{ route('skill.store') }}" method="post" class="form-horizontal">
    <div class="modal-body">
        {{csrf_field()}}
        <input type="hidden" name="id" value="{{@$skill->id}}">
        <div class="form-group">
            <label class="col-md-3 control-label" for="name">Skills Name</label>
            <div class="col-md-8">
                <input type="text" name="name" class="form-control" placeholder="Skill name"
                       required="required" value="{{@$skill->name}}">
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