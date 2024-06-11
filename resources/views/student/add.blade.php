@extends('layouts.app')

@section('content')

    <div class="container d-flex justify-content-center">
        <div class="row justify-content-center">

            
            <p class="h1 text-center mt-5">Novo Aluno</p>

        <form action="{{route('student.store')}}" method="POST" class="bg-body shadow border rounded p-4 mt-5" id="add-student-form">
                @csrf
                
                <div class="row mt-5 mb-3">

                    <div class="col-md-8">
                        <label for="name" class="form-label">Nome</label>
                        <input type="text" class="form-control" name="student_name" id="student_name">
                    </div>

                    <div class="col-md-4">
                        <label for="contact" class="form-label">Contato</label>
                        <input type="tel" class="form-control" name="contact" id="contact" placeholder="(99) 99999-9999">
                    </div>
                </div>

                <div class="row mb-3">

                    <div class="col-md-4">
                        <label for="schedule_days" class="form-label">Agendamento(Dia)</label>
                        <select name="schedule_days" id="schedule_days" class="form-select">
                            <option value="">Selecione</option>
                            <option value="SEGUNDA">Segunda</option>
                            <option value="TERCA">Terça</option>
                            <option value="QUARTA">Quarta</option>
                            <option value="QUINTA">Quinta</option>
                            <option value="SEXTA">Sexta</option>
                            <option value="SABADO">Sábado</option>
                        </select>
                    </div>

                    <div class="col-md-4">
                        <label for="schedule_time" class="form-label">Agendamento(Horário)</label>
                        <select name="schedule_time" id="schedule_time" class="form-select">
                            <option value="">Selecione</option>
                            <option value="08:00">08:00</option>
                            <option value="09:00">09:00</option>
                            <option value="10:00">10:00</option>
                            <option value="11:00">11:00</option>
                            <option value="12:00">12:00</option>
                            <option value="13:00">13:00</option>
                            <option value="14:00">14:00</option>
                            <option value="15:00">15:00</option>
                            <option value="16:00">16:00</option>
                            <option value="17:00">17:00</option>
                            <option value="18:00">18:00</option>
                            <option value="19:00">19:00</option>
                            <option value="20:00">20:00</option>
                            <option value="21:00">21:00</option>
                        </select>
                    </div>

                    <div class="col-md-4">
                        <label for="payment_date" class="form-label">Primeiro Pagamento</label>
                        <input type="date" class="form-control" name="payment_date" id="payment_date">
                    </div>
                </div>

                <div class="row mt-5">
                    <div class="col text-end">
                        <button type="submit" class="btn btn-primary btn-block px-5">Cadastrar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script src="{{asset('js/add-student.js')}}"></script>

@endsection