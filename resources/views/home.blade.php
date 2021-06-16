@extends('layouts.main')

@section('content')
    <div class="container">
        <h1>DC Comics</h1>
        <ul>
            <li>
                <a class="nav-link @if(Route::currentRouteName() == 'home') active @endif" 
                href="{{ route('home') }}">HOME</a>
            </li>
            <li>
                <a class="nav-link @if(Route::currentRouteName() == 'comics.index') active @endif" href="{{ route('comics.index') }}">COMICS</a>
            </li>
            <li>
                <a class="nav-link @if(Route::currentRouteName() == 'comics.create') active @endif" href="{{ route('comics.create') }}">New Comics</a>
            </li>
        </ul>
    </div>
@endsection