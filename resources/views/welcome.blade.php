@extends('layouts.app')


@section ('content')


<nav class="navbar navbar-expand-lg bg-info">
    <div class="container-fluid d-flex justify-content-end me-3">
        @if (Route::has('login'))
        <div class="">
            @auth
            <a href="{{ url('/banghay') }}" class="">Home</a>
            @else
            <a href="{{ route('login') }}" class="">Log in</a>

            @if (Route::has('register'))
            <a href="{{ route('register') }}" class="">Register</a>
            @endif
            @endauth
        </div>
    </div>
</nav>
@endif

<div class="container text-center">
    <div class="m-5">

        <img src="../img/G1.png">

    </div>

    <h1>This is the Landing Page</h1>
</div>


@endsection