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
            <td>
                <a href="{{route('comics.show', $comic->id)}}">Dettagli</a>
                <a href="{{route('comics.edit', $comic->id)}}">Modifica</a>
                <form action="{{ route('comics.destroy', $comic->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm" type="submit" onclick="return confirm('E SE POI TE NE PENTI??')">
                        <i class="fa fa-trash"></i>
                    </button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>

@endsection
