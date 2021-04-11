  
@extends('layouts.layout')

@section('content')
<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ url('/home') }}">Home</a>
            @else
                <a href="{{ route('login') }}">Login
                </a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}">Register</a>
                @endif
            @endauth
        </div>
    @endif
    
    <div class="polaroid">
        <img src="/img/aku-ganteng.jpg" alt="orang ganteng" style="width:500px">
        <div class="container">
            <p>Rizal Achmad Pahlevi</p>
        </div>
    </div>

    <!-- <dev class="img">
        <img src="/img/aku-ganteng.jpg" style="width: 500px; height: 345px;" alt="foto orang ganteng">
    </dev> -->

    <div class="content">
        <img src="/img/Teknik-Komputer.png" alt="Teknik Komputer logo">
        <div class="title m-b-md">
            Kahyangan Golongan C
    </div>


        <div class="flex-center">
            <div class="jarak">
                <div class="responsive">
                    <img src="/img/laravel.png" alt="LogoLaravel" style="width:100px">
                </div>
            </div>
            <div class="jarak">
                <div class="responsive">
                    <img src="/img/xampp.png" alt="LogoXAMPP" style="width:100px">
                </div>
            </div>
        </div>
            <!--<img src="" style="width: 100px; height: 100px;"  alt="logo laravel">
            <img src="" style="width: 100px; height: 100px;"  alt="logo Xampp"> -->
    </div>
    
</div>
@endsection