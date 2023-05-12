@extends('layouts.app')

@section('title')
    {{$comic->title}}
@endsection

@section('main')
<div class="p-5">
    <a href="{{route('comics.index')}}">Torna alla lista</a>
</div>
<h1 class="text-center text-primary text-uppercase">{{$comic->title}}</h1>
<div class="container d-flex align-items-center">
    <div class="p-5 w-50 text-light"><p class=" lh-lg fs-5">{!! $comic->description !!}</p></div>

    <div class="w-25 m-auto">
        <img class="img-fluid my-5" src="{{$comic->thumb}}" alt="{{$comic->title}}">
    </div>
</div>

@endsection
