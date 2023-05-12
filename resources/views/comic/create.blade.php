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

    <form action="{{route('comics.store')}}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="thumb" class="form-label">Immagine</label>
            <input type="text" class="form-control @error('thumb') is-invalid @enderror" id="thumb" name="thumb" value="{{ old('thumb') }}">
            @error('thumb')<div class="alert alert-danger">{{ $message }}</div>@enderror
        </div>

        <div class="mb-3">
            <label for="titolo" class="form-label">Titolo</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title') }}">
            @error('title')<div class="alert alert-danger">{{ $message }}</div>@enderror
        </div>

        <div class="mb-3">
            <label for="type" class="form-label">Tipo</label>
            <select class="form-select @error('type') is-invalid @enderror" name="type">
                @error('type')<div class="alert alert-danger">{{ $message }}</div>@enderror
                <option selected>Seleziona il tipo</option>
                <option value="comic book" {{ old('type') === 'comic book' ? 'selected' : null }}>Comic book</option>
                <option value="graphic novel" {{ old('type') === 'graphic novel' ? 'selected' : null }}>graphic novel</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">Prezzo</label>
            <input type="text" class="form-control @error('price') is-invalid @enderror" id="price" name="price" value="{{ old('price') }}">
            @error('price')<div class="alert alert-danger">{{ $message }}</div>@enderror
        </div>

        <div class="mb-3">
            <label for="series" class="form-label">Serie</label>
            <input type="text" class="form-control @error('series') is-invalid @enderror" id="series" name="series" value="{{ old('series') }}">
            @error('series')<div class="alert alert-danger">{{ $message }}</div>@enderror
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Descrizione</label>
            <textarea class="form-control @error('description') is-invalid @enderror" id="description" rows="3" name="description">{{ old('description') }}</textarea>
            @error('description')<div class="alert alert-danger">{{ $message }}</div>@enderror
        </div>

        <div class="mb-3">
            <label for="artists" class="form-label">Artisti</label>
            <input type="text" class="form-control @error('artists') is-invalid @enderror" id="artists" name="artists" value="{{ old('artists') }}">
            @error('artists')<div class="alert alert-danger">{{ $message }}</div>@enderror
        </div>

        <div class="mb-3">
            <label for="writers" class="form-label">Autore</label>
            <input type="text" class="form-control @error('writers') is-invalid @enderror" id="writers" name="writers" value="{{ old('writers') }}">
            @error('writers')<div class="alert alert-danger">{{ $message }}</div>@enderror
        </div>

        <div class="mb-3">
            <label for="sale_date" class="form-label">Data uscita</label>
            <input type="text" class="form-control @error('sale_date') is-invalid @enderror" id="sale_date" name="sale_date" value="{{ old('sale_date') }}">
            @error('sale_date')<div class="alert alert-danger">{{ $message }}</div>@enderror
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
