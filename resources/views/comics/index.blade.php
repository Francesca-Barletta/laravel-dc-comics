@extends('layout.app')

@section('title','comics')
    
@section('content')  
<main class="bg-dark">
    <div class="container">
         <h1 class="text-white">Comics</h1>
    </div>
   
    <div class="container">
        <table class="table table-dark table-striped">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Description</th>
                <th scope="col">Image</th>
                <th scope="col">Price</th>
                <th scope="col">Series</th>
                <th scope="col">Sale_date</th>
                <th scope="col">Type</th>
              </tr>
            </thead>
            <tbody>
            @foreach ($comics as $comic)
              <tr>
                <th scope="row">{{$comic->id}}</th>
                <td><a href="{{ route('comics.show', $comic )}}"></a></td>
                <td>{{ $comic->description }}</td>
                <td>
                    <img src="{{ $comic->thumb }}" alt="" style="width: 200px;">
                </td>
                <td>{{ $comic->price}}</td>
                <td>{{ $comic->series }}</td>
                <td>{{ $comic->sale_date }}</td>
                <td>{{ $comic->type }}</td>
               
              </tr>
            @endforeach
            </tbody>
          </table>
    </div>
</main>



@endsection