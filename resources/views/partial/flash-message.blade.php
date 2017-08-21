@if(session('success'))
    <div class="error-show">
        <div class="alert alert-success" id="cls_notification">
            {{ session('success') }}
        </div>
    </div>
@endif

@if($errors->any())
    <div class="error-show">
        <div class="alert alert-danger" id="cls_notification">
            @foreach($errors->all() as $error)
                {{ $error }}
            @endforeach
        </div>
    </div>
@endif