@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Добавить термин</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('terms.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Название:</label>
                <input type="text" name="name" id="name" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Описание:</label>
                <textarea name="description" id="description" class="form-control" required></textarea>
            </div>

            <div class="mb-3">
                <label for="complexity" class="form-label">Сложность:</label>
                <input type="number" name="complexity" id="complexity" class="form-control" value="3" min="1" max="5">
            </div>

            <button type="submit" class="btn btn-primary">Добавить</button>
            <a href="{{ route('terms.index') }}" class="btn btn-secondary">Назад</a>
        </form>
    </div>
@endsection
