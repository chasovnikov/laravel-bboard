@extends('layouts.base')

@section('title', 'Мои объявления')

@section('main')

<h2>Добро пожаловать, {{ Auth::user()->name }}!</h2>
<p class="text-right"><a href="{{ route('bb.create') }}">Добавить объявление</a></p>
<p class="text-right"><a href="{{ route('rubric.create') }}">Добавить рубрику</a></p>

@if (count($bbs) > 0)
<table class="table table-striped">
    <thead>
        <tr>
            <th>Товар</th>

            <th>Цена, руб.</th>
            <th colspan="2">&nbsp;</th>
        </tr>
    </thead>
    <tbody>

        @foreach ($bbs as $bb)
        <tr>
            <td>
                <h3>{{ $bb->title }}</h3>
            </td>
            <td>{{ $bb->price }}</td>
            <td>
                <a href="{{ route('bb.edit', ['bb' => $bb->id]) }}">Изменить</a>
            </td>
            <td>
                <form action="{{ route('bb.destroy', ['bb' => $bb->id]) }}" method="POST">
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
