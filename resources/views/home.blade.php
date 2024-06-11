@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
       
        @if($students->count() > 0)
 
        
        <div class="col-md-12 text-center">
            <h1 class="text-center mt-5 mb-3">Meus alunos</h1> 

            <div class="d-flex justify-content-center gap-3">
                <p class="h5">Total de alunos: {{ $students->count() }}</p>
                <p><a href="{{route('student.filter', 1)}}" class="link-primary">Ativos: {{ $students->where('is_active', 1)->count() }}</a></p>
                <p><a href="{{route('student.filter', 0)}}" class="link-secondary">Inativos: {{ $students->where('is_active', 0)->count() }}</a></p>
               
            </div>
            <a href="{{ route('student.create') }}" class="btn btn-primary btn-block py-2 px-5">Cadastrar</a>

            
        </div>

            <div class="col text-center mt-2 mb-3">
                
            </div>
            @include('student.table', ['students' => $students])

        @else

            <div class="row justify-content-center mt-5">
                <p class="h2 text-center mt-5">
                    Você ainda não tem alunos cadastrados.
                </p>
                <div class="col-md-6 text-center mt-3">
                    <a href="{{ route('student.create') }}" class="btn btn-primary btn-block px-5">Cadastrar</a>
                </div>
            </div>
        @endif

    </div>
</div>
@endsection
