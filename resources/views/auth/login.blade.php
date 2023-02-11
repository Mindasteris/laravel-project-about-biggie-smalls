@extends('layouts.app')

@section('title', 'Login')

@section('content')
<div class="bg-black text-white text-center p-8 login">

    <h1 class="text-center font-bold text-6xl lg:text-8xl pb-20">B.I.G.</h1>

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div>
            <label for="email">{{ __('Email Address') }}</label>

            <div>
                <input id="email" type="email" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email" autofocus>

                <div>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
        </div>

        <div>
            <label for="password">{{ __('Password') }}</label>

            <div>
                <input id="password" type="password" class="@error('password') is-invalid @enderror" name="password" autocomplete="current-password">

                <div>
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
        </div>

        <div>
            <div>
                <button type="submit">
                    {{ __('Login') }}
                </button>
            </div>

            <div class="mt-4">
                @if (Route::has('password.request'))
                    <a class="hover:underline" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                @endif
            </div>
        </div>
    </form>
    
    <div class="mt-12">
        <img src="{{ asset('pictures/big-face.png') }}" alt="big-face" class="mx-auto">
    </div>
</div>
@endsection
