@extends('layouts.app')
@section('content')
<div class="container">
    <div class="d-flex justify-content-around">
        <div class="col-md-8">
            <div class="card">
                    <div class="card-header">{{ __('Специальности и профессии') }}</div>
                    <div class="card-body">
                        <table class="table table-bordered"> <!-- Создание таблицы с записями. -->
                            <tr>
                                <th>№</th>
                                <th>Наименнование специальности или профессии</th>
                                <th>Код специальности или профессии</th>
                                <th width="390px">Действия</th>
                            </tr>
                            @foreach ($specialties_and_professions as $specialties_and_profession)   <!-- Перебираем список и выводим в таблицу. -->
                            <tr>
                                <td>{{ ++$i }}</td>
                                <td>{{ $specialties_and_profession->title }}</td>
                                <td>{{ $specialties_and_profession->number }}</td>
                                <td>
                                    <form action="{{ route('specialties_and_professions.destroy',$specialties_and_profession->id) }}" method="POST" id="form">    <!-- Создание ссылок на изменение, удаление или просмотр записей . -->
                                    <a class="btn btn-primary" href="{{ route('specialties_and_professions.edit',$specialties_and_profession->id) }}">Редактировать</a>
                                        @csrf    <!-- Проверка запросов. -->
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Удалить</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </table>
                        <div class="d-flex justify-content-around">
                            <a href="{{ url('/home') }}" class="btn btn-primary">Назад</a>
                            <a class="btn btn-primary" href="{{ route('specialties_and_professions.create') }}">Добавить</a>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>
{!! $specialties_and_professions->links() !!}
@endsection