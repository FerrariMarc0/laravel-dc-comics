@extends('layouts.app')

@section('title')
    <span>Inserisci Nuovo elemento</span>
@endsection

@section('main')

<div class="container">
    <a href="{{route('comics.index')}}">Torna alla lista</a>
</div>

<form action="{{route('comics.store')}}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="src" class="form-label">Immagine</label>
        <input type="text" class="form-control" id="src" name="src">
    </div>
    <div class="mb-3">
        <label for="titolo" class="form-label">Titolo</label>
        <input type="text" class="form-control" id="title" name="title">
    </div>
    <div class="mb-3">
        <label for="type" class="form-label">Tipo</label>
        <select class="form-select" name="type">
            <option selected>Seleziona il tipo</option>
            <option value="Comic book">Comic book</option>
            <option value="graphic novel">graphic novel</option>
        </select>
    </div>
    <div class="mb-3">
        <label for="price" class="form-label">Prezzo</label>
        <input type="number" class="form-control" id="price" name="price">
    </div>
    <div class="mb-3">
        <label for="series" class="form-label">Serie</label>
        <input type="text" class="form-control" id="series" name="series">
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Descrizione</label>
        <textarea class="form-control" id="description" rows="3" name="description"></textarea>
    </div>
    <div class="mb-3">
        <label for="author" class="form-label">Autore</label>
        <input type="text" class="form-control" id="author" name="author">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
