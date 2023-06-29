@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="{{ route('terms.update', $term) }}" method="POST">
            @csrf
            @method('PUT')
            <h1>Изменить термин</h1>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="mb-3">
                <label for="name" class="form-label">Название:</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ $term->name }}">
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Описание:</label>
                <textarea name="description" id="description" class="form-control">{{ $term->description }}</textarea>
            </div>

            <div class="mb-3">
                <label for="complexity" class="form-label">Сложность:</label>
                <input type="number" name="complexity" id="complexity" class="form-control" value="{{ $term->complexity }}">
            </div>

            <button type="submit" class="btn btn-primary">Сохранить</button>
            <a href="{{ route('terms.index') }}" class="btn btn-secondary">Назад</a>
        </form>
    </div>
@endsection
