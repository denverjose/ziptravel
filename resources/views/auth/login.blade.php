@extends('layouts.auth-master')

@section('content')
    <form method="post" action="{{ route('login.perform') }}">
        
        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
        
        @include('layouts.partials.navbar')

       

        <div class="container contact">
            <div class="row mx-3">
                <div class="col-md-3">
                    <div class="contact-info">
                        <img class="img-fluid" src="http://cdn.onlinewebfonts.com/svg/img_311846.png" alt="image"/>
                    </div>
                </div>
                <div class="col-md-9 contact-form">
                        <div class="form-group form-floating mb-3">
                            <input type="text" class="form-control" name="username" value="{{ old('username') }}" placeholder="Username" required="required" autofocus>
                            <label for="floatingName">Email or Username</label>
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
                        <div class="form-group">        
                            <div class=" col-12 mt-4 ">
                            <button type='submit' class='btn col-12 btn-dark' id="add" >Login</button>
                            </div>
                            @include('layouts.partials.messages')
                        </div>
                </div>
            </div>
        @include('auth.partials.copy')

        </div>
        
    </form>
@endsection