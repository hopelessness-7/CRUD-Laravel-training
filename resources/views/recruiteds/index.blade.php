@extends('layouts.app')
@section('content')
<div class="container">
    <div class="d-flex justify-content-around">
        <div class="col-md-8">
            <div class="card">
                    <div class="card-header">{{ __('Принятые абитуриенты') }}</div>
                    <div class="card-body">
                        <table class="table table-bordered"> <!-- Создание таблицы с записями. -->
                            <tr>
                                <th>№</th>
                                <th>Абитуриент</th>
                                <th>Специальность или профессия</th>
                                <th style="width: 18%">Дата зачисления</th>
                                <th width="390px">Действия</th>
                            </tr>
                            @foreach ($recruiteds as $applicants => $applicant)   <!-- Перебираем список и выводим в таблицу. -->
                            <tr>
                                <td>{{ $applicant->id }}</td>
                                <td>{{ $applicant->Full_Name }}</td>
                                <td>{{ $applicant->title }}</td>
                                <td>{{ $applicant->created_at }}</td>
                                <td>
                                    <form action="{{ route('recruiteds.destroy',$applicant->id) }}" method="POST" id="form">    <!-- Создание ссылок на изменение, удаление или просмотр записей . -->
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
                            <a class="btn btn-primary" href="{{ route('recruiteds.create') }}">Добавить</a>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>

@endsection