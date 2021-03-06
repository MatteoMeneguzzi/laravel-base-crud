@extends('layouts.main')

@section('content')
    <div class="container">
        <h1 class="mb-5">Our Comics</h1>

        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Series</th>
                    <th>Image</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($comics as $comic)
                    <tr>
                        <td>{{ $comic->id }}</td>
                        <td>{{ $comic->title }}</td>
                        <td>{{ $comic->series }}</td>
                        <td><img src="{{ $comic->thumb }}" alt=""></td>
                        <td><a href="{{route('comics.show', $comic->slug)}}">SHOW</a></td>
                        <td><button><a href="{{ route('comics.edit', $comic->id)}}">EDIT</a></button></td>
                        <td>
                            <form action="{{ route('comics.destroy', $comic->id)}}">
                                <button><a href="">DELETE</a></button></form></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
            <div class="box-container">
                @foreach($comics as $comic)
                    <div class="box">
                        
                        <div><img src="{{ $comic->thumb }}" alt="{{ $comic->thumb }}"></div>
                        <div>{{ $comic->title }}</div>
                        <div>{{ $comic->series }}</div>
                        <div>{{ $comic->sale_date }}</div>
                        <div>{{ $comic->price }}</div>
                    </div>
                @endforeach
            </div>

            {{ $comics->links() }}
        
    </div>
@endsection