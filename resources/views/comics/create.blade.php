@extends('layouts.main')

@section('content')
    <div class="container">
        <h1>Add new comic</h1>

        <form action="{{ route('comics.store') }}" method="POST"></form>
            @csrf

            @method('POST')

            <div class="box">
                <label for="title" class="control-label">Title</label>
                <input type="text" class="form-control" name="title" id="title">
            </div>
            <div class="box">
                <label for="description" class="control-label">Description</label>
                <textarea rows="5" class="form-control" name="description" id="description"></textarea>
            </div>

            <div class="box">
                <label for="type" class="control-label">Type</label>
                <select name="type" id="type" class="form-control">
                    <option value="comic book"></option>
                    <option value="graphic novel"></option>
                </select>
            </div>

            {{-- <div class="box">
                <label for="image">Image</label>
                <input type="text" name="image" id="image">
            </div> --}}

            <div class="box">
                <label for="price" class="control-label">Price</label>
                <input type="text" name="price" id="price" class="form-control">
            </div>

            <button type="submit">Create</button>
            
        <a href="{{ route('comics.index')}}">Back to archive</a>
    </div>
@endsection