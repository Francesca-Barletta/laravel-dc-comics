@extends('layout.app')

@section('title', 'comics')

@section('content') 

<main class="bg-dark">
    <div class="container">
        <h1 class="text-white">Create your Comic!</h1>
    </div>
    <div class="container">
       <form action="{{ route('comics.store') }}" method="POST">

        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Comic Title</label>
            <input type="text" class="form-control" name="title" id="title" >
          </div>
          <div class="mb-3">
            <label for="description" class="form-label">Comic Description</label>
            <textarea class="form-control" name="description" id="description" rows="3"></textarea>
          </div>
          <div class="mb-3">
            <label for="thumb" class="form-label">Comic Poster Url</label>
            <input type="text" class="form-control" name="thumb" id="thumb" placeholder="Http://..." >
          </div>
          <div class="mb-3">
            <label for="price" class="form-label">Comic Price</label>
            <input type="text" class="form-control" name="price" id="price" placeholder="$00.00">
          </div>
          <div class="mb-3">
            <label for="series" class="form-label">Comic Series</label>
            <input type="text" class="form-control" name="series" id="series" >
          </div>
          <div class="mb-3">
            <label for="sale_date" class="form-label">Comic Sale Date</label>
            <input type="text" class="form-control" name="sale_date" id="sale_date" >
          </div>
          <div class="mb-3">
            <label for="type" class="form-label">Comic Tipe</label>
            <input type="text" class="form-control" name="type" id="type" >
          </div>
          <button class="btn btn-danger">Create</button>
       </form>
    </div>
</main>

@endsection