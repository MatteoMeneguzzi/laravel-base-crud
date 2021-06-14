@extends('layouts.main')

@section('content')
    <div class="container">
        <h1>DC Comics</h1>
        <ul>
            <li>
                <a href="{{ route('home') }}">HOME</a>
            </li>
            <li>
                <a href="{{ route('comics.index') }}">COMICS</a>
            </li>
        </ul>
    </div>
@endsection