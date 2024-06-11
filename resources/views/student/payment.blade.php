@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center mt-5">

        <div class="col-md-8 text-center mt-5">
            <p>Vencimento {{$student->payment_date}}</p>
            <h2>{{ $student->student_name }} está com o pagamento {{ ($status_payment == 0) ? 'em atraso' : 'em dia'}}</h2>
            <a href="{{ route('student.updatePayment', $student->id)}}" class="btn btn-success px-3 mx-2 mb-3">Confirmar Recebimento</a>
        @if ($status_payment == 0)
            <a href="{{ route('student.edit', $student->id)}}" class="btn btn-danger px-5 mx-2 mb-3">Inativar Aluno</a>
        @endif
        </div>
        
    </div>
</div>

@endsection