@extends('layout.app')

@section('title', 'comics')

@section('content') 

<main class="bg-dark">
    <div class="container">
        <h1 class="text-white">
            Edit the comic:{{ $comic->title }}
        </h1>
    </div>
    <div class="container">
       <form action="{{ route('comics.update', $comic) }}" method="POST">

        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="title" class="form-label text-white">Comic Title</label>
            <input type="text" class="form-control" name="title" id="title" value="{{ $comic->title }}" >
          </div>
          <div class="mb-3">
            <label for="description" class="form-label text-white">Comic Description</label>
            <textarea class="form-control" name="description" id="description" rows="3">{{ $comic->description }}</textarea>
          </div>
          <div class="mb-3">
            <label for="thumb" class="form-label text-white">Comic Poster Url</label>
            <input type="text" class="form-control" name="thumb" id="thumb" placeholder="Http://..." value="{{ $comic->thumb }}">
          </div>
          <div class="mb-3">
            <label for="price" class="form-label text-white">Comic Price</label>
            <input type="text" class="form-control" name="price" id="price" placeholder="$00.00" value="{{ $comic->price }}">
          </div>
          <div class="mb-3">
            <label for="series" class="form-label text-white">Comic Series</label>
            <input type="text" class="form-control" name="series" id="series"value="{{ $comic->series }}" >
          </div>
          <div class="mb-3">
            <label for="sale_date" class="form-label text-white">Comic Sale Date</label>
            <input type="text" class="form-control" name="sale_date" id="sale_date" value="{{ $comic->sale_date }}" >
          </div>
          <div class="mb-3">
            <label for="type" class="form-label text-white">Comic Tipe</label>
            <input type="text" class="form-control" name="type" id="type" value="{{ $comic->type }}" >
          </div>
          <button class="btn btn-danger">Save</button>
       </form>
    </div>
</main>

@endsection