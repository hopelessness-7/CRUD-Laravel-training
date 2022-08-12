@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Специальности и профессии') }}</div>
                <div class="card-body">
                    <form id="form" action="{{ route('specialties_and_professions.store') }}" method="POST">  
                        @csrf
                        <div class="d-flex justify-content-around">
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Наименнование:</strong>
                                        <input type="text" name="title" class="form-control" placeholder="title">
                                    </div>
                                    <div class="form-group">
                                        <strong>Код:</strong>
                                        <input type="text" name="number" class="form-control" id="dataReg" placeholder="number">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-around">
                            <a href="{{ route('specialties_and_professions.index') }}" class="btn btn-primary">Назад</a>
                            <button type="submit" id="btn" class="btn btn-primary">Создать</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection