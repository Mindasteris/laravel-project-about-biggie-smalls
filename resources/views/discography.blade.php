@extends('layouts.app')

@section('title', 'Music')

@section('content')
    <div class="p-8 py-20 bg-black text-white">
        <h1 class="pb-20 text-center font-bold text-6xl lg:text-8xl">MUSIC</h1>
       <div class="discography flex flex-col md:flex-row justify-center items-center flex-wrap gap-20">
            <figure>
                <img src="{{ asset('pictures/albums/album1.jpg') }}" alt="Ready to Die">
            </figure>
            <figure>
                <img src="{{ asset('pictures/albums/album2.jpg') }}" alt="Life After Death">
            </figure>
            <figure>
                <img src="{{ asset('pictures/albums/album3.jpg') }}" alt="Born Again">
            </figure>
            <figure>
                <img src="{{ asset('pictures/albums/album4.jpg') }}" alt="Duets: The Final Chapter">
            </figure>
            <figure>
                <img src="{{ asset('pictures/albums/album5.jpg') }}" alt="Greatest Hits">
            </figure>
            <figure>
                <img src="{{ asset('pictures/albums/album6.jpg') }}" alt="The King & I">
            </figure>
       </div>
    </div>
@endsection