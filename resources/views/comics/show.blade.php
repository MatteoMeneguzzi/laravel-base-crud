@extends('layouts.main')

@section('content')
    <div class="container">
        <h1>{{$comic->title}}</h1>

        <div><img src="{{ $comic->thumb }}" alt="{{ $comic->thumb }}"></div>
        <div>{!! $comic->description !!}</div>
        <div>{{ $comic->series }}</div>

        <div><strong>{{ $comic->price }}</strong></div>

        <a href="{{ route('comics.index')}}">Back to archive</a>
    </div>
@endsection