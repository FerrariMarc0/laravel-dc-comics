@extends('layouts.app')

@section('title')
    {{$comic->title}}
@endsection

@section('main')
<h1>{{$comic->title}}</h1>
<div class="container">
    {!! $comic->description !!}
</div>
<div>
    <a href="{{route('comics.index')}}">Torna alla lista</a>
</div>
@endsection
