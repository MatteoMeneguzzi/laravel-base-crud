@extends('layouts.main')

@section('content')
    <div class="container">
        <h1>Edit: <a href="{{route('comics.show', $comic->id)}}"></a></h1>

        <form action="{{ route('comics.store') }}" method="POST">
            @csrf

            @method('POST')

            <div class="box">
                <label for="title">Title</label>
                <input type="text" name="title" id="title">
            </div>

            <div class="box">
                <label for="description">Description</label>
                <textarea rows="5" name="description" id="description">{{$comic->description}}</textarea>
            </div>

            <div class="box">
                <label for="type">Type</label>
                <select type="text" name="type" id="type">
                    <option value="comic book" @if($comic->type == 'comic book') selected @endif>comic book</option>
                    <option value="graphic novel" @if($comic->type == 'graphic novel') selected @endif>graphic novel</option>
                </select>
            </div>

            <div class="box">
                <label for="image">Image</label>
                <input type="text" name="image" id="image">
            </div>

            <div class="box">
                <label for="price">Price</label>
                <input type="number" name="price" id="price">
            </div>
            
            <button>Create</button>
           </form> 
        <a href="{{ route('comics.index')}}">Back to archive</a>
    </div>
@endsection