@extends('layouts.app')

@section('title')
Modifica
@endsection

@section('main')
<a href="{{ route('comics.index') }}">Torna alla lista</a>
<div class="container">
    <h1 class="text-center text-primary text-uppercase">Modifica elemento: {{$comic->title}}</h1>

<form action="{{ route('comics.update', $comic) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="thumb" class="form-label">Immagine</label>
        <input type="text" class="form-control" id="thumb" name="thumb" value="{{$comic->thumb}}">
    </div>
    <div class="mb-3">
        <label for="titolo" class="form-label">Titolo</label>
        <input type="text" class="form-control" id="title" name="title" value="{{$comic->title}}">
    </div>
    <div class="mb-3">
        <label for="type" class="form-label">Tipo</label>
        <select class="form-select" name="type">
            <option  {{ empty($comic->type) ? 'selected' : null }}>Seleziona il tipo</option>
            <option value="comic book" {{ $comic->type === 'comic book' ? 'selected' : null }}>Comic book</option>
            <option value="graphic novel" {{ $comic->type === 'graphic novel' ? 'selected' : null }}>graphic novel</option>
        </select>
    </div>
    <div class="mb-3">
        <label for="price" class="form-label">Prezzo</label>
        <input type="number" class="form-control" id="price" name="price" value="{{$comic->price}}">
    </div>
    <div class="mb-3">
        <label for="series" class="form-label">Serie</label>
        <input type="text" class="form-control" id="series" name="series" value="{{$comic->series}}">
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Descrizione</label>
        <textarea class="form-control" id="description" rows="3" name="description">{{$comic->description}}</textarea>
    </div>
    <div class="mb-3">
        <label for="artists" class="form-label">Artisti</label>
        <input type="text" class="form-control" id="artists" name="artists" value="{{$comic->artists}}">
    </div>
    <div class="mb-3">
        <label for="writers" class="form-label">Autori</label>
        <input type="text" class="form-control" id="writers" name="writers" value="{{$comic->writers}}">
    </div>
    <div class="mb-3">
        <label for="sale_date" class="form-label">Data uscita</label>
        <input type="text" class="form-control" id="sale_date" name="sale_date" value="{{$comic->sale_date}}">
    </div>

    <button type="submit" class="btn btn-primary">Salva modifiche</button>
</form>
</div>
@endsection
