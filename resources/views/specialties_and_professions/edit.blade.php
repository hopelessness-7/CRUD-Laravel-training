@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="max-width: 60rem;">
                <div class="card-header">{{ __('Абитуриент') }}</div>
                <div class="card-body">
                    <form action="{{ route('specialties_and_professions.update',$specialties_and_profession->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="d-flex justify-content-around">
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Наименнование:</strong>
                                        <input type="text" name="title" class="form-control" value ="{{ $specialties_and_profession->title}}">
                                    </div>
                                    <div class="form-group">
                                        <strong>Код:</strong>
                                        <input type="text" name="number" class="form-control" id="dataReg" value ="{{ $specialties_and_profession->number}}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-around">
                            <a href="{{ route('applicants.index') }}" class="btn btn-primary">Назад</a>
                            <button type="submit" id="btn" class="btn btn-primary">Обновить</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection