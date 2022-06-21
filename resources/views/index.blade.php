@extends('layouts.base')

@section('title', 'Главная')

@section('main')

@if (count($adverts) > 0)
<table class="table table-striped">
    <thead>
        <tr>
            <th>Товар</th>
            <th>Цена, руб.</th>
            <th>&nbsp;</th>
        </tr>
    </thead>
    <tbody>

        @foreach ($adverts as $advert)
        <tr>
            <td>
                <h3>{{ $advert->title }}</h3>
            </td>
            <td>{{ $advert->price }}</td>
            <td>
                <a href="{{ route('public.show', ['advert' => $advert->id]) }}">Подробнее...</a>
            </td>
        </tr>
        @endforeach

    </tbody>
</table>
@endif

@endsection
