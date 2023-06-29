@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Список записей справочника</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>
                        <a href="{{ route('terms.index', ['sort_by' => 'name', 'sort_order' => $sortOrder === 'asc' ? 'desc' : 'asc']) }}" class="btn btn-secondary btn-sm btn-rounded">
                            <i class="bi bi-sort"></i> Название
                        </a>
                    </th>
                    <th>
                        <a href="{{ route('terms.index', ['sort_by' => 'description', 'sort_order' => $sortOrder === 'asc' ? 'desc' : 'asc']) }}" class="btn btn-secondary btn-sm btn-rounded">
                            <i class="bi bi-sort"></i> Описание
                        </a>
                    </th>
                    <th>
                        <a href="{{ route('terms.index', ['sort_by' => 'complexity', 'sort_order' => $sortOrder === 'asc' ? 'desc' : 'asc']) }}" class="btn btn-secondary btn-sm btn-rounded">
                            <i class="bi bi-sort"></i> Сложность
                        </a>
                    </th>
                    <th>Действия</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($terms as $term)
                    <tr>
                        <td>{{ $term->name }}</td>
                        <td>{!! $term->description !!}</td>
                        <td>{{ $term->complexity }}</td>
                        <td>
                            <a href="{{ route('terms.edit', $term) }}" class="btn btn-primary">Редактировать</a>
                            <form action="{{ route('terms.destroy', $term) }}" method="POST" onsubmit="return confirm('Вы уверены?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Удалить</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <a href="{{ route('terms.create') }}" class="btn btn-success">Добавить запись</a>
    </div>
@endsection
