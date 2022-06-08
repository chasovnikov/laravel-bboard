@extends('layouts.base')

@section('title', 'Удаление объявления')

@section('main')

<form action="{{ route('bb.destroy', ['bb' => $bb->id]) }}" method="POST">
    @csrf
    @method('DELETE')
    <input type="submit" class="btn btn-danger" value="Удалить">
</form>

@endsection