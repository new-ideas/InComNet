@extends('layouts.admin-front-end')

@section('content')
    <div class="middle-box text-center loginscreen animated fadeInDown">
        <div>
            <div>

                <h1 class="logo-name">IN+</h1>

            </div>
            <h3>Welcome to IN+</h3>
            <p>Perfectly designed and precisely prepared admin theme with over 50 pages with extra new web app views.
                <!--Continually expanded and constantly improved Inspinia Admin Them (IN+)-->
            </p>
            <p>Login in. To see it in action.</p>

            <form class="m-t" role="form" method="post" action="{{ route('login')  }}">
                {{csrf_field()}}
                <div class="form-group">
                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}"
                           placeholder="Email" required autofocus>

                    @if ($errors->has('email'))
                        <span class="help-block">
                       <strong>{{ $errors->first('email') }}</strong>
                    </span>
                    @endif
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
                <small>Inspinia we app framework base on Bootstrap 3 &copy; 2014</small>
            </p>
        </div>
    </div>
@endsection
