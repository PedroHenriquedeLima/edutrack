@extends('layouts.app')

@section('content')
<div class="container">
    @if($students->count() > 0)
    <div class="row">
        @if($status == 0)
            <h1 class="text-center mt-5 mb-4">Alunos inativos</h1>
        @else
            <h1 class="text-center mt-5 mb-4">Alunos ativos</h1>
        @endif
        @include('student.table', ['students' => $students])
    </div>
    @else

        @if($status == 0)
            <h1 class="text-center mt-5 mb-4">Alunos inativos</h1>
        @else
            <h1 class="text-center mt-5 mb-4">Alunos ativos</h1>
        @endif
        <h1 class="text-center mt-5">Nenhum aluno encontrado</h1>
    @endif
    </div>
@endsection