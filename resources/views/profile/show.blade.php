@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Профиль пользователя</h1>

        <table class="table">
            <tr>
                <th>Имя:</th>
                <td>{{ $user->name }}</td>
            </tr>
            <tr>
                <th>Фамилия:</th>
                <td>{{ $user->last_name }}</td>
            </tr>
            <!-- Добавьте другие поля профиля, если необходимо -->
        </table>

        <a href="{{ route('profile.edit') }}" class="btn btn-primary">Редактировать профиль</a>
    </div>
@endsection