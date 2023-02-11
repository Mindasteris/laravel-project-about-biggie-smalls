@extends('layouts.app')

@section('title', 'Edit Feedback')

@section('content')
    <div class="p-8 py-20">
        <h1 class="text-center font-bold text-5xl">Edit Comment</h1>

        <div class="contact-form max-w-[400px] mx-auto mt-10">
            <form action="{{ route('community.update', $comment->id) }}" method="POST">
                @csrf
                {{-- @method('PATCH') --}}
                <div>
                    <label for="name">{{ __('Name') }}</label>

                    <div>
                        <input id="name" type="text" class="@error('name') is-invalid @enderror" name="name" value="{{ $comment->name }}" autofocus>

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
                    <label for="subject">{{ __('Subject') }}</label>

                    <div>
                        <input id="subject" type="text" class="@error('subject') is-invalid @enderror" name="subject" value="{{ $comment->subject }}" autofocus>

                        <div>
                            @error('subject')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>

                <div>
                    <label for="comment_message">{{ __('Comment') }}</label>

                    <div>
                        <textarea name="comment_message" id="comment_message" rows="10" class="@error('comment_message') is-invalid @enderror">{{ $comment->comment_message }}</textarea>
                        <div>
                            @error('comment_message')
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
                            {{ __('Edit') }}
                        </button>
                    </div>
                </div>
            </form>
        </div>

        <div class="go-back-button text-center">
            <a href="{{ route('community.index') }}"><button>Go Back</button></a>
        </div>
    </div>
@endsection