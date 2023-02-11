@extends('layouts.app')

@section('title', 'Register')

@section('content')
<div class="bg-black text-white text-center p-8 register">

    <h1 class="text-center font-bold text-6xl lg:text-8xl pb-20">JOIN US</h1>

    <form method="POST" action="{{ route('register') }}">
        @csrf

        <div>
            <label for="name">{{ __('Name') }}</label>

            <div>
                <input id="name" type="text" class="@error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" autocomplete="name" autofocus>

                <div>
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
        </div>

        <div>
            <label for="email">{{ __('Email Address') }}</label>

            <div>
                <input id="email" type="email" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email">

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
                <input id="password" type="password" class="@error('password') is-invalid @enderror" name="password" autocomplete="new-password">

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
            <label for="password-confirm">{{ __('Confirm Password') }}</label>

            <div>
                <input id="password-confirm" type="password" name="password_confirmation" autocomplete="new-password">
            </div>
        </div>

        <div>
            <div>
                <button type="submit">
                    {{ __('Register') }}
                </button>
            </div>
        </div>
    </form>

    <div class="mt-12">
        <img src="{{ asset('pictures/big-register.png') }}" alt="big-face" class="mx-auto">
    </div>
</div>
@endsection
