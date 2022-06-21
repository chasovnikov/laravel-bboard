@extends('layouts.base')

@section('title', $advert->title)

@section('main')

    <h2>{{ $advert->title }}</h2>
    <p>{{ $advert->content }}</p>
    <p>{{ $advert->price }} руб.</p>
    <p><a href="{{ route('index') }}">На перечень объявлений</a></p>

@endsection
