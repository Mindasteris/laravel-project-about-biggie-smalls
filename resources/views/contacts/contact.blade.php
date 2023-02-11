@extends('layouts.app')

@section('title', 'Contact Us')

@section('content')
    <div class="p-8 py-20">
        <h1 class="text-center font-bold text-6xl lg:text-8xl">HIP HOP</h1>
        <h2 class="text-center font-bold text-4xl my-4">LEGEND</h2>

        {{-- Contact Success Message --}}
        @if (Session::has('contactMessage'))
            <div class="success-message">
                <span>{{ Session::get('contactMessage') }}</span>
            </div>
        @endif

        <div class="flex flex-col xl:flex-row justify-around items-center gap-10 my-10 lg:my-20">
            <div>
                <img src="{{ asset('pictures/contact-picture.jpg') }}" alt="biggie-smalls" class="w-full max-w-[1000px]">
            </div>

            <div class="contact-form">
                <form action="{{ route('contactSend') }}" method="POST">
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
                        <label for="contact_message">{{ __('Message') }}</label>
            
                        <div>
                            <textarea name="contact_message" id="contact_message" cols="30" rows="10" class="@error('contact_message') is-invalid @enderror"></textarea>

                            <div>
                                @error('contact_message')
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
                                {{ __('Send Message') }}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection