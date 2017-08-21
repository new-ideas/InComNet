@extends('admin.layouts.admin-front-end')

@section('content')
    <div class="middle-box text-center loginscreen animated fadeInDown">
        <div>
            <div>
                <h1 class="logo-name">{!! HTML::Image('public/images/mk52ppp.png','Int.Com.Net', array('class'=>'img-responsive')) !!}</h1>
            </div>
            <div class="form-group">
            <h2>Admin Panel</h2>
            </div>
            @include('partial.flash-message')

            <form class="m-t" role="form" method="post" action="{{ route('admin.login')  }}">
                {{csrf_field()}}
                <div class="form-group">
                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}"
                           placeholder="Email" required autofocus>
                </div>
                <div class="form-group">
                    <input id="password" type="password" class="form-control" name="password" placeholder="Password"
                           required>

                    @if ($errors->has('password'))
                        <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                    @endif
                </div>
                <div class="form-group text-left">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                        </label>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary block full-width m-b">Login</button>

                <a href="{{ route('password.request') }}">
                    <small>Forgot password?</small>
                </a>
            </form>

            <p class="m-t">
                <small>International Communication Network &copy; 2017</small>
            </p>
        </div>
    </div>
@endsection
