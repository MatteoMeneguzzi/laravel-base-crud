@extends('layouts.main')

@section('content')
    <div class="container">
        <h1>404</h1>

        <h2>{{ $exception->getMessage() }}</h2>
        <h3>
            Ooops, something went wrong!
        </h3>

        <p>The resource you were searching for is not available</p>
        <a href="{{ route('comics.index')}}">Back to archive</a>
    </div>
@endsection