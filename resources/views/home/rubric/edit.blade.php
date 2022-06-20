@extends('layouts.base')

@section('title', 'Правка объявления :: Мои объявления')

@section('main')
<form action="{{ route('bb.update', ['bb' => $bb->id]) }}" method="POST">
    @csrf
    @method('PATCH')

    <div class="form-group">
        <label for="txtTitle">Рубрика</label>
        <input name="name" id="txtTitle" class="form-control  @error('name') is-invalid @enderror"
            value="{{ old('name', $rubric->name) }}">

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
            <option value="{{ old('id', $rubric->id) }}" @selected(old('rubric->id') == $rubric->id)>
                {{ $rubric->name }}
            </option>
            @endforeach
        </select>

        <input type="submit" class="btn btn-primary" value="Сохранить">
</form>




@endsection