{{-- pagina che estende il layouts --}}
@extends('layouts.comic-layout')
@section('content')

 <ol>
        @foreach($comics as $comic)
            <li>
                <ul>
                    <li>{{ $comic["title"] }}</li>
                    <li>{{ $comic["author"] }}</li>
                    <li>{{ $comic["year"] }}</li>
                    <li>{{ $comic["review"] }}</li>
                    <li>{{ $comic["vote"] }}</li>
                    <li>{{ $comic["path"] }}</li>
                </ul>
            </li>
            <br>
        @endforeach
    </ol>
    
@endsection