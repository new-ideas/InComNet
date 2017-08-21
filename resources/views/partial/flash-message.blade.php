@if(session('success'))
    <div class="error-show">
        <div class="alert alert-success" id="cls_notification">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            {{ session('success') }}
        </div>
    </div>
@endif

@if($errors->any())
    <div class="error-show">
        <div class="alert alert-danger" id="cls_notification">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            @foreach($errors->all() as $error)
                {{ $error }}
            @endforeach
        </div>
    </div>
@endif