@extends('layouts.base')

@section('title', 'Добавление рубрики :: Мои объявления')

@section('main')

<h2>Добавление рубрики</h2>

<form action="{{ route('bb.store') }}" method="POST">

    @csrf

    <div class="form-group">
        <label for="txtTitle">Рубрика</label>
        <input name="name" id="txtTitle" class="form-control  @error('name') is-invalid @enderror"
            value="{{ old('name') }}">

        @error('name')
        <span class="invalid-feedback">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>

    <div class="form-group">
        <label for="txtTitle">Родительская рубрика</label>

        <select size="4" class="form-control" name="parent_id">
            @foreach ($rubrics as $rubric)
            <option value="{{ $rubric->id }}" @selected(old('rubric->id') == $rubric->id)>
                {{ $rubric->name }}
            </option>
            @endforeach
        </select>

        @error('parent_id')
        <span class="invalid-feedback">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>

    <input type="submit" class="btn btn-primary" value="Добавить">

</form>


@endsection