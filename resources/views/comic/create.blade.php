@extends('layouts.app')

@section('title')
Inserisci
@endsection

@section('main')
<h1>Inserisci Nuovo elemento</h1>

<div class="container">

    <div class="container">
        <a href="{{route('comics.index')}}">Torna alla lista</a>
    </div>

    <div>
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
    </div>

    <form action="{{route('comics.store')}}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="thumb" class="form-label">Immagine</label>
            <input type="text" class="form-control @error('thumb') is-invalid @error" id="thumb" name="thumb" value="{{ old('thumb') }}">
            @error('thumb') <div class="alert alert-danger">{{ $message }}</div> @enderror
        </div>

        <div class="mb-3">
            <label for="titolo" class="form-label">Titolo</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}">
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
            <input type="text" class="form-control" id="price" name="price">
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
            <label for="artists" class="form-label">Artisti</label>
            <input type="text" class="form-control" id="artists" name="artists">
        </div>

        <div class="mb-3">
            <label for="writers" class="form-label">Autore</label>
            <input type="text" class="form-control" id="writers" name="writers">
        </div>

        <div class="mb-3">
            <label for="sale_date" class="form-label">Data uscita</label>
            <input type="text" class="form-control" id="sale_date" name="sale_date">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
