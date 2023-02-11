@extends('layouts.app')

@section('title', 'Community')

@section('content')
    <div class="p-8 py-20 community">
        <div class="flex flex-col xl:flex-row-reverse justify-center">
            <div class="">
                <h1 class="text-center font-bold text-6xl lg:text-8xl">HIP HOP</h1>
                <h2 class="text-center font-bold text-2xl my-4">COMMUNITY</h2>
            </div>
        
            <div class="flex md:hidden">
                <img src="{{ asset('pictures/big-community.png') }}" alt="big-community" class="max-w-[400px] mx-auto">
            </div>
        </div>

        {{-- Success Message --}}
        @if (Session::has('success'))
            <div class="success-message">
                <span>{{ Session::get('success') }}</span>
            </div>
        @endif
    
        {{-- Edit Message --}}
        @if (Session::has('editMessage'))
            <div class="edit-message">
                <span>{{ Session::get('editMessage') }}</span>
            </div>
        @endif

        {{-- Edit Message --}}
        @if (Session::has('deleteMessage'))
            <div class="delete-message">
                <span>{{ Session::get('deleteMessage') }}</span>
            </div>
        @endif

        <div class="my-10 text-center">
            <h1 class="font-bold text-xl">Tell us everything you want!</h1>
            <h2 class="font-bold my-4">This is B.I.G. world</h2>
            <a href="{{ route('community.create') }}"><button class="my-20">Create</button></a>
        </div>

        {{-- Comments PHP --}}
        @if ($comments->count() == 0)
            <div>
                <p class="text-5xl text-center">No Comments!</p>
            </div>
        @else
            <div>
                <p class="text-5xl text-center">All Comments</p>
            </div>
        @endif

        <div class="flex flex-col lg:flex-row flex-wrap justify-start items-center gap-2">
            @foreach ($comments as $comment )
                <div class="p-4 w-full max-w-[600px] shadow-md shadow-indigo-400 border rounded-md my-6">
                    
                    <p class="text-xl font-bold">{{ $comment->name }}</p>
                    <p class="text-sm italic">{{ $comment->updated_at }}</p>

                    <div class="py-5">
                        <p class="">{{ $comment->subject }}</p>
                        <p class="border text-[18px] mt-5 p-2 h-20 rounded-lg overflow-auto">{{ $comment->comment_message }}</p>
                    </div>

                    <div class="space-x-2">
                        <a href="{{ route('community.edit', $comment->id) }}" class="bg-blue-600 p-2 rounded-md text-white">Edit</a>
                        <a href="{{ route('community.destroy', $comment->id) }}" class="bg-red-600 p-2 rounded-md text-white">Delete</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection