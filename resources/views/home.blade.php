@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
       
        @if($students->count() > 0)





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
