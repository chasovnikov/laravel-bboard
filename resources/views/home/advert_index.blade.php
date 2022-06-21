@extends('layouts.base')

@section('title', 'Мои объявления')

@section('main')

<h2>Добро пожаловать, {{ Auth::user()->name }}!</h2>
<p class="text-right"><a href="{{ route('home.create') }}">Добавить объявление</a></p>
<!-- <p class="text-right"><a href="{{ route('category.create') }}">Добавить рубрику</a></p> -->

@if (count($adverts) > 0)
<table class="table table-striped">
    <thead>
        <tr>
            <th>Товар</th>

            <th>Цена, руб.</th>
            <th colspan="2">&nbsp;</th>
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
                <a href="{{ route('home.edit', ['advert' => $advert->id]) }}">Изменить</a>
            </td>
            <td>
                <form action="{{ route('home.destroy', ['advert' => $advert->id]) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <input type="submit" class="btn btn-danger" value="Удалить">
                </form>
            </td>
        </tr>
        @endforeach

    </tbody>
</table>
@endif

@endsection
