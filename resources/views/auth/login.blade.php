@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm">
                <div class="col">
                    <br><br><br>
                    <br><br><br>
                    <br><br><br>
                    <br><br><br>
                    <h2><b>Welcome</b> </h2>
                    <h2><b> Back!</b></h2>
                    <p>Login to your account</p>

                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group row">

                            <div class="col">
                                <input id="email" placeholder="Email Address" type="email"
                                    class="form-control @error('email') is-invalid @enderror" name="email"
                                    value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col">
                                <input id="password" placeholder="Password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password" required
                                    autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col ">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                        {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col">
                                <button type="submit" class="btn btn-primary btn-block">
                                    {{ __('Login') }}
                                </button>
                                <br>
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                                <a class="btn btn-link" href="{{ route('register') }}">
                                    {{ __('Dont have an account?') }}
                                </a>
                            </div>
                        </div>
                    </form>


                </div>
            </div>
            <div class="col-sm">
                <img src="{{ url('images/login1.png') }}" alt="login1">
            </div>
            <div class="col-md-5">
                <img src="{{ url('images/login2.png') }}" alt="login2">
            </div>
        </div>
    </div>

@endsection
