@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Абитуриент') }}</div>
                <div class="card-body">
                    <form id="form" action="{{ route('applicants.store') }}" method="POST">  
                        @csrf
                        <div class="d-flex justify-content-around">
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Регистрационный номер:</strong>
                                        <input type="text" name="Registration_number" class="form-control" placeholder="Registration number">
                                    </div>
                                    <div class="form-group">
                                        <strong>Дата приема заявления:</strong>
                                        <input type="date" name="Date_of_receipt_of_the_application" class="form-control" id="dataReg" placeholder="Date of receipt of the application">
                                    </div>
                                    <div class="form-group">
                                        <strong>Номер школы:</strong>
                                        <input type="text" name="School_Number" class="form-control" placeholder="School Number">
                                    </div>
                                    <div class="form-group">
                                        <strong>ФИО:</strong>
                                        <input type="text" name="Full_Name" class="form-control" placeholder="Full Name">
                                    </div>
                                    <div class="form-group">
                                        <strong>Дата рождения:</strong>
                                        <input type="date" name="Date_of_birth" class="form-control" id="dataBth" placeholder="Date of birth">
                                    </div>
                                    <div class="form-group">
                                        <strong>Средний балл:</strong>
                                        <input type="text" name="balls" class="form-control" placeholder="balls">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Данные паспорта:</strong>
                                        <input type="text" name="Passport" class="form-control" placeholder="Passport">
                                    </div>
                                    <div class="form-group">
                                        <strong>Прописка по паспорту/Фактический адрес:</strong>
                                        <input type="text" name="Registration" class="form-control" id="dataReg" placeholder="Registration">
                                    </div>
                                    <div class="form-group">
                                        <strong>Телефон:</strong>
                                        <input type="text" name="Telephone" class="form-control" placeholder="Telephone">
                                    </div>
                                    <div class="form-group">
                                        <strong>Аттестат/Диплом:</strong>
                                        <input type="text" name="Certificate_Diploma" class="form-control" placeholder="Certificate Diploma">
                                    </div>
                                    <div class="form-group">
                                        <strong>Удостоверение призывника:</strong>
                                        <input type="text" name="Conscript_ID" class="form-control" placeholder="Conscript ID">
                                    </div>
                                    <div class="form-group">
                                        <strong>МС:</strong>
                                        <input type="text" name="MC" class="form-control" placeholder="MC">
                                    </div>
                                    <div class="form-group">
                                        <strong>ИНН:</strong>
                                        <input type="text" name="INN" class="form-control" placeholder="INN">
                                    </div>
                                    <div class="form-group">
                                        <strong>СС:</strong>
                                        <input type="text" name="SS" class="form-control" placeholder="SS">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-around">
                            <a href="{{ route('applicants.index') }}" class="btn btn-primary">Назад</a>
                            <button type="submit" id="btn" class="btn btn-primary">Создать</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
</script>
@endsection