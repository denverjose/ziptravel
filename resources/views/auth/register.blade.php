@extends('layouts.auth-master')

@section('content')
@include('layouts.partials.navbar')

    <form method="post" action="{{ route('register.perform') }}">

        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
        
        <div class="container contact">
            <div class="row mx-3">
                <div class="col-md-3">
                    <div class="contact-info">
                        <img class="img-fluid" src="http://cdn.onlinewebfonts.com/svg/img_311846.png" alt="image"/>
                    </div>
                </div>
                <div class="col-md-9 contact-form">
                    <div class="form-group form-floating mb-3">
                        <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="name@example.com" required="required" autofocus>
                        <label for="floatingEmail">Email address</label>
                        @if ($errors->has('email'))
                            <span class="text-danger text-left">{{ $errors->first('email') }}</span>
                        @endif
                    </div>
            
                    <div class="form-group form-floating mb-3">
                        <input hidden type="text" class="form-control" name="username" value="{{ old('username') }}" placeholder="Username"  autofocus>
                        <label for="floatingName">Username</label>
                        @if ($errors->has('username'))
                            <span class="text-danger text-left">{{ $errors->first('username') }}</span>
                        @endif
                    </div>
                    
                    <div class="form-group form-floating mb-3">
                        <input type="password" class="form-control" name="password" value="{{ old('password') }}" placeholder="Password" required="required">
                        <label for="floatingPassword">Password</label>
                        @if ($errors->has('password'))
                            <span class="text-danger text-left">{{ $errors->first('password') }}</span>
                        @endif
                    </div>

                    <div class="form-group form-floating mb-3">
                        <input type="password" class="form-control" name="password_confirmation" value="{{ old('password_confirmation') }}" placeholder="Confirm Password" required="required">
                        <label for="floatingConfirmPassword">Confirm Password</label>
                        @if ($errors->has('password_confirmation'))
                            <span class="text-danger text-left">{{ $errors->first('password_confirmation') }}</span>
                        @endif
                    </div>

                    <button type='submit' class='btn col-12 btn-dark' id="add">Register</button>    


                </div>
            </div>
            @include('auth.partials.copy')
        </div>
        
    </form>

@endsection
