@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <div class="p-8 py-20">
        <h1 class="text-center font-bold text-6xl lg:text-8xl">THE KING</h1>

        <div class="my-8 text-center w-full max-w-[500px] mx-auto">
            <img src="{{ asset('pictures/king.png') }}" alt="the-king" class="mx-auto w-80">
            
            <h2 class="text-2xl font-bold p-4">Biggie Smalls</h2>
            <p class="text-lg">Full name Christopher George Latore Wallace also known as "The Notorious B.I.G." was a revered hip-hop artist and face of East Coast gangsta rap.</p>
        </div>

        <div class="mt-40">
            <img src="{{ asset('pictures/big-sign.png') }}" alt="notorious-big" class="mx-auto">
        </div>
    </div>
@endsection

{{-- @if (Route::has('login'))
    <div>
        @auth
            <a href="{{ url('/home') }}">Home</a>
        @else
            <a href="{{ route('login') }}">Login</a>

            @if (Route::has('register'))
                <a href="{{ route('register') }}">Register</a>
            @endif
        @endauth
    </div>
@endif --}}