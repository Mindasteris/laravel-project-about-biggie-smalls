@extends('layouts.app')

@section('title', 'User Dashboard')

@section('content')
<div class="p-8 h-screen text-center lg:text-left welcome">
    <div class="text-3xl lg:text-4xl xl:text-5xl font-bold text-white mt-5">{{ __('WELCOME TO THE HOOD') }}</div>

    <div class="hidden lg:block">
        <h1 class="text-xl lg:text-3xl font-semibold text-teal-300 my-10">Hello, <span>{{ Auth::user()->name }}</span></h1>
    </div>

    {{-- <div>
        @if (session('status'))
            <div>
                {{ session('status') }}
            </div>
        @endif

        {{ __('You are logged in!') }}
    </div> --}}
</div>
@endsection
