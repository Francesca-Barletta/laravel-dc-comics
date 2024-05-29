@extends('layout.app')

@section('title', 'home')

@section('content')

<main class="bg-dark">
    <div class="container">
        <h1 class="text-white">Comics Library</h1>   
    </div>
    <div class="container text-center">
        <div class="row">
        @foreach($comics as $comic)
          <div class="col">
            <img src="{{ $comic['thumb']}}" alt="" style="width:300px;">
          </div>
        @endforeach
        </div>
    </div>
    
</main>
@endsection