@extends('layouts.admin-front-end')

@section('content')

    <div class="middle-box text-center animated fadeInDown">
        <h1>404</h1>
        <h3 class="font-bold">Page Not Found</h3>

        <div class="error-desc">
            Sorry, but the page you are looking for has note been found. Try checking the URL for error, then hit the
            refresh button on your browser or try found something else in our app.

            <div class="form-group">
                <a href="{{Route('home')}}" class="btn btn-primary">&larr; Back To Home</a>
            </div>
        </div>
    </div>
@endsection