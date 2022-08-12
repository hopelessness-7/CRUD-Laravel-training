@extends('layouts.app')
@section('content')
<style>
    a{

    }
</style>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                <div class="card-body">
                    <div class="d-flex justify-content-around">
                        <a href="{{ route('applicants.index') }}" class="btn btn-secondary">Абитуриенты</a>
                        <a href="{{ route('specialties_and_professions.index') }}" class="btn btn-secondary">Специальности и профессии</a>
                        <a href="{{ route('recruiteds.index') }}" class="btn btn-secondary">Принятые абитуриенты</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
