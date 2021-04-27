@extends('layouts.app')
<br><br>
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm">
                <br><br><br>
                <br><br><br>
                <br><br><br>
                <br><br><br>
                <h2><b>Create</b> </h2>
                <h2><b>Account.</b></h2>
                <p>Fill in to register</p>
                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="form-group row">


                        <div class="col">
                            <input id="name" placeholder="Full Name" type="text"
                                class="form-control @error('name') is-invalid @enderror" name="name"
                                value="{{ old('name') }}" required autocomplete="name" autofocus>

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col">
                            <input id="email" placeholder="Email" type="email"
                                class="form-control @error('email') is-invalid @enderror" name="email"
                                value="{{ old('email') }}" required autocomplete="email">

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col">
                            <input id="password" type="password" placeholder="Password"
                                class="form-control @error('password') is-invalid @enderror" name="password" required
                                autocomplete="new-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col">
                            <input id="password-confirm" placeholder="Confirm Password" type="password" class="form-control"
                                name="password_confirmation" required autocomplete="new-password">
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col">
                            <button type="submit" class="btn btn-primary btn-block">
                                {{ __('Register') }}
                            </button>
                            <br>
                            <a class="btn btn-link" href="{{ route('login') }}">
                                {{ __('Already have an account? Login') }}
                            </a>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-sm">
                <img src="{{ url('images/register1.png') }}" alt="register1">
            </div>
            <div class="col-md-5">
                <img src="{{ url('images/register2.png') }}" alt="register2">
            </div>
        </div>
    </div>








@endsection
