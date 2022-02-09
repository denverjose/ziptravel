@extends('layouts.app-master')

@section('content')
    <div class="bg-light p-5 rounded">
        @auth
        <h1>Homepage</h1>
        <p class="lead">You're viewing the home page. Go to users to view the restricted data.</p>

        @endauth

        @guest
        <h1>Homepage</h1>
        <p class="lead">Your're viewing the home page. Please login to view the restricted data.</p>
        @endguest
    </div>
@endsection