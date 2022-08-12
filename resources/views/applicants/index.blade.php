@extends('layouts.app')
@section('content')
<div class="container">
    <div class="d-flex justify-content-around">
        <div class="col-md-8">
            <div class="card">
                    <div class="card-header">{{ __('Абитуриенты') }}</div>
                    <div class="card-body">
                        <table class="table table-bordered"> <!-- Создание таблицы с записями. -->
                            <tr>
                                <th>№</th>
                                <th>ФИО</th>
                                <th>Статус документов</th>
                                <th width="390px">Действия</th>
                            </tr>
                            @foreach ($applicants as $applicant)   <!-- Перебираем список и выводим в таблицу. -->
                            <tr>
                                <td>{{ ++$i }}</td>
                                <td>{{ $applicant->Full_Name }}</td>
                                <td>{{ $applicant->status_doc }}</td>
                                <td>
                                    <form action="{{ route('applicants.destroy',$applicant->id) }}" method="POST" id="form">    <!-- Создание ссылок на изменение, удаление или просмотр записей . -->
                                    <a class="btn btn-primary" href="{{ route('applicants.edit',$applicant->id) }}">Редактировать</a>
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
                            <a href="{{ route('applicants.create') }}" class="btn btn-primary">Добавить абитуриента</a>
                        </div>
                    </div>
                    {!! $applicants->links() !!}
            </div>
        </div>
    </div>
</div>
</div>
@endsection