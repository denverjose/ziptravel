@extends('layouts.auth-master')

@section('content')
@auth
    <form action="{{ route('users.update',$user->id) }}" method="post">
        <input type="hidden" name="_token" value="{{ csrf_token() }}" />

        <div class="container contact">
            <div class="row mx-3">
                <div class="col-md-3">
                    <div class="contact-info">
                        <img class="img-fluid" src="http://cdn.onlinewebfonts.com/svg/img_311846.png" alt="image"/>
                        <h3>Edit</h1>
                    </div>
                </div>

                <div class="col-md-9 contact-form">

                    <div class="form-group form-floating mb-3">
                        @csrf
                        @method('PATCH')
                        <input type="email" class="form-control" name="email" value="{{ $user->email }}" required autofocus>
                        <label for="floatingEmail">Email address</label>
                        @if ($errors->has('email'))
                            <span class="text-danger text-left">{{ $errors->first('email') }}</span>
                        @endif
                    </div>

                    <div class="form-group form-floating mb-3">
                        <input style="cursor:not-allowed" disabled type="text" class="form-control" name="password" value="{{ $user->password }}" >
                        <label for="floatingPassword">Password</label>
                        @if ($errors->has('password'))
                            <span class="text-danger text-left">{{ $errors->first('password') }}</span>
                        @endif
                    </div>
            
                    <div class="form-group form-floating mb-3">
                        <input style="cursor:not-allowed" disabled type="text" class="form-control" name="password_confirmation" value="{{ $user->password }}" placeholder="Confirm Password">
                        <label for="floatingConfirmPassword">Confirm Password</label>
                        @if ($errors->has('password_confirmation'))
                            <span class="text-danger text-left">{{ $errors->first('password_confirmation') }}</span>
                        @endif
                    </div>
                    <div class="row">
                    <button type='submit' class='btn-sm btn-primary' id="adds">Update</button>    
                    <button href="/users" class='btn-sm btn-secondary mx-2' id="cancel">Cancel</button>    
                </div>
            </div>
            @include('auth.partials.copy')
        </div> 
    </form>
    @endauth
    @guest
        <h1>Nope</h1>
        @endguest

@endsection
