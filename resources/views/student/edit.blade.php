@extends('layouts.app')

@section('content')

<div class="container d-flex justify-content-center">


    <div class="row justify-content-center">

        
        <p class="h1 text-center mt-3">Editar Aluno</p>
        <p class="text-center">Altere o campo ou campos que deseja e clique em Confirmar Alteração</p>

    <form action="{{route('student.update', $student->id)}}" method="POST" class="bg-body shadow border rounded p-4 mt-5" id="add-student-form">
        @csrf
        @method('PUT')
    <div class="row mt-5 mb-3">

        <div class="col-md-8">
            <label for="student_name" class="form-label">Nome</label>
            <input  type="text" class="form-control" value="{{$student->student_name}}" name="student_name" id="student_name">
        </div>

        <div class="col-md-4">
            <label for="contact" class="form-label">Contato</label>
            <input  type="tel" class="form-control" value="{{$student->contact}}" name="contact" id="contact" placeholder="(99) 99999-9999">
        </div>
    </div>

    <div class="row mb-3">

        <div class="col-md-6">
            <label for="schedule_days" class="form-label">Agendamento(Dia)</label>
            <select  name="schedule_days" id="schedule_days" class="form-select">
                <option>{{ $student->schedule_days }}</option>
                <option value="SEGUNDA">Segunda</option>
                <option value="TERCA">Terça</option>
                <option value="QUARTA">Quarta</option>
                <option value="QUINTA">Quinta</option>
                <option value="SEXTA">Sexta</option>
                <option value="SABADO">Sábado</option>
            </select>
        </div>

        <div class="col-md-6">
            <label for="schedule_time" class="form-label">Agendamento(Horário)</label>
            <select  name="schedule_time" id="schedule_time" class="form-select">
                <option>{{$student->schedule_time}}</option>
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

    </div>

    <div class="row mt-5">
        <div class="col text-end">
            <button type="submit" class="btn btn-primary btn-block px-5">Confirmar Alteração</button>
        </div>
    </div>

</form>
    <script src="{{asset('js/edit-student.js')}}"></script>
</div>
</div>


@endsection