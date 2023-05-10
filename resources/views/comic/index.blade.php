@extends('layouts.app')

@section('title')
    Lista Fumetti
@endsection

@section('main')

<div class="container">
    <a href="{{route('comics.create')}}">Crea un nuovo elemento</a>
    <table class="table">
    <thead>
        <tr>
            <th scope="col">Titolo</th>
            <th scope="col">Serie</th>
            <th scope="col">Uscita</th>
            <th scope="col">Genere</th>
            <th scope="col">Autore/i</th>
            <th scope="col">Prezzo</th>
            <th scope="col">Azioni</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($comics as $comic)
        <tr>
            <td>{{$comic->title}}</td>
            <td>{{$comic->series}}</td>
            <td>{{$comic->sale_date}}</td>
            <td>{{$comic->type}}</td>
            <td>{{$comic->writers}}</td>
            <td>{{$comic->price}}</td>
            <td><a href="{{route('comics.show', $comic->id)}}">Dettagli</a></td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>

@endsection
