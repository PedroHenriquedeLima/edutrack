@extends('layouts.app')

@section('content')

<div class="container d-flex justify-content-center align-items-center mt-5">
    <div class="text-center mt-5">
        <h1 class="display-4 mb-4">Seja Bem Vindo ao EduTrack</h1>
        <p class="lead mb-4">O seu sistema de rastreamento de alunos, aulas e pagamentos, tudo na palma das suas mãos.</p>
        <p class="lead mb-4">Controle seus alunos, suas aulas e seus recebimentos.</p>
        <div class="col-md-12">
            <a href="{{route('register')}}" class="btn btn-primary btn-lg">Crie sua conta</a>
        </div>

    </div>
</div>

@endsection
