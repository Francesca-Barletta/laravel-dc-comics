@extends('layout.app')

@section('title', 'comics')

@section('content') 

<main class="bg-dark">
    <div class="container">
        <h1 class="text-white">{{ $comic->title}} nel dettaglio:</h1>
    </div>
    <div class="container">
        <img src="{{ $comic->thumb }}" alt="" style="width:500px;">
        <p class="text-white">{{ $comic->description }}</p>
        <p class="text-white fs-2">{{ $comic->price }}</p>
    </div>
</main>

@endsection