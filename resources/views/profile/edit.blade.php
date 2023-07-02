@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Редактировать профиль</h1>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('profile.update') }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="name">Имя</label>
                <input type="text" name="name" id="name" value="{{ $user->name }}" class="form-control">
            </div>

            <div class="form-group">
                <label for="last_name">Фамилия</label>
                <input type="text" name="last_name" id="last_name" value="{{ $user->last_name }}" class="form-control">
            </div>

            <button type="submit" class="btn btn-primary">Сохранить</button>
        </form>
    </div>
@endsection
