@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="max-width: 60rem;">
                <div class="card-header">{{ __('Абитуриент') }}</div>
                <div class="card-body">
                    <form action="{{ route('applicants.update',$applicant->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="d-flex justify-content-around">
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Регистрационный номер:</strong>
                                        <input type="text" name="Registration_number" class="form-control" placeholder="Registration number" value ="{{ $applicant ->Registration_number}}">
                                    </div>
                                    <div class="form-group">
                                        <strong>Дата приема заявления:</strong>
                                        <input type="date" name="Date_of_receipt_of_the_application" class="form-control" id="dataReg" placeholder="Date of receipt of the application" value ="{{ $applicant ->Date_of_receipt_of_the_application}}">
                                    </div>
                                    <div class="form-group">
                                        <strong>Номер школы:</strong>
                                        <input type="text" name="School_Number" class="form-control" placeholder="School Number" value ="{{ $applicant ->School_Number}}">
                                    </div>
                                    <div class="form-group">
                                        <strong>ФИО:</strong>
                                        <input type="text" name="Full_Name" class="form-control" placeholder="Full Name" value ="{{ $applicant ->Full_Name}}">
                                    </div>
                                    <div class="form-group">
                                        <strong>Дата рождения:</strong>
                                        <input type="date" name="Date_of_birth" class="form-control" id="dataBth" placeholder="Date of birth" value ="{{ $applicant ->Date_of_birth}}">
                                    </div>
                                    <div class="form-group">
                                        <strong>Средний балл:</strong>
                                        <input type="text" name="balls" class="form-control" placeholder="balls" value ="{{ $applicant ->balls}}">
                                    </div>
                                    <div class="form-group">
                                        <strong>Статус документов:</strong>
                                        <input type="text" name="status_doc" class="form-control" placeholder="status_doc" value ="{{ $applicant ->status_doc}}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Данные паспорта:</strong>
                                        <input type="text" name="Passport" class="form-control" placeholder="Passport" value ="{{ $applicant ->Passport}}">
                                    </div>
                                    <div class="form-group">
                                        <strong>Прописка по паспорту/Фактический адрес:</strong>
                                        <input type="text" name="Registration" class="form-control" id="dataReg" placeholder="Registration" value ="{{ $applicant ->Registration}}">
                                    </div>
                                    <div class="form-group">
                                        <strong>Телефон:</strong>
                                        <input type="text" name="Telephone" class="form-control" placeholder="Telephone" value ="{{ $applicant ->Telephone}}">
                                    </div>
                                    <div class="form-group">
                                        <strong>Аттестат/Диплом:</strong>
                                        <input type="text" name="Certificate_Diploma" class="form-control" placeholder="Certificate_Diploma" value ="{{ $applicant -> Certificate_Diploma}}">
                                    </div>
                                    <div class="form-group">
                                        <strong>Удостоверение призывника:</strong>
                                        <input type="text" name="Conscript_ID" class="form-control" placeholder="Conscript ID" value ="{{ $applicant ->Conscript_ID}}">
                                    </div>
                                    <div class="form-group">
                                        <strong>МС:</strong>
                                        <input type="text" name="MC" class="form-control" placeholder="MC" value ="{{ $applicant ->MC}}">
                                    </div>
                                    <div class="form-group">
                                        <strong>ИНН:</strong>
                                        <input type="text" name="INN" class="form-control" placeholder="INN" value ="{{ $applicant ->INN}}">
                                    </div>
                                    <div class="form-group">
                                        <strong>СС:</strong>
                                        <input type="text" name="SS" class="form-control" placeholder="SS" value ="{{ $applicant ->SS}}">
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