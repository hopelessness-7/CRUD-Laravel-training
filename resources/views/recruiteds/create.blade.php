@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Принятые абитуриенты') }}</div>
                <div class="card-body">
                    <form id="form" action="{{ route('recruiteds.store') }}" method="POST">  
                        @csrf
                        <div class="d-flex justify-content-around">
                            <div class="form-group">
                                <strong>Абитуриент:</strong>
                                <br>
                                <select id="selectApplicantId" name="selectApplicantId" onchange="applicantId(event)" class="form-select" multiple aria-label="multiple select example">
                                    @foreach ($applicants as $applicant)
                                    <option value="{{$applicant->id}}">{{$applicant->Full_Name}}</option>
                                    @endforeach
                                </select>
                                <input type="text" style="display: none" name="applicant_id" class="form-control" id="inputApplicantId" placeholder="applicant_id">
                            </div>
                            <div class="form-group">
                                <strong>Специальность или профессия:</strong>
                                <br>
                                <select name="selectSaPId" id="selectSaPId" onchange="SaPId(event)" class="form-select" multiple aria-label="multiple select example">
                                    @foreach ($specialties_and_professions as $specialties_and_profession)
                                    <option value="{{$specialties_and_profession->id}}">{{$specialties_and_profession->title}}</option>
                                    @endforeach
                                </select>
                                <input type="text" style="display: none" id="inputSaPId" name="specialties_and_profession_id" class="form-control" placeholder="specialties_and_profession_id">
                            </div>
                        </div>
                        <div class="d-flex justify-content-around">
                            <a href="{{ route('recruiteds.index') }}" class="btn btn-primary">Назад</a>
                            <button type="submit" id="btn" class="btn btn-primary">Создать</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    function applicantId(e) {
        let intext =  document.getElementById("inputApplicantId");
        intext.value = e.target.value
    };
    function SaPId(e) {
        let intext =  document.getElementById("inputSaPId");
        intext.value = e.target.value
    };
</script>
@endsection