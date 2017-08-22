<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
    </button>
    <h4 class="modal-title" id="myModalLabel">{{@$country->id?'Update':'Add'}} Country</h4>
</div>
<form action="{{ route('country.store') }}" method="post" class="form-horizontal">
    <div class="modal-body">
        {{csrf_field()}}
        <input type="hidden" name="id" value="{{@$country->id}}">
        <div class="form-group">
            <label class="col-md-3 control-label" for="name">Country Code</label>
            <div class="col-md-8">
                <input type="text" name="country_code" class="form-control" placeholder="Country Code"
                       required="required" value="{{@$country->name}}">
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label" for="name">Country Name</label>
            <div class="col-md-8">
                <input type="text" name="name" class="form-control" placeholder="Country name"
                       required="required" value="{{@$country->name}}">
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label" for="name">Dialing Code</label>
            <div class="col-md-8">
                <input type="text" name="dialing_code" class="form-control" placeholder="Skill name"
                       required="required" value="{{@$country->name}}">
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